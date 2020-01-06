<?php


class StoreDB
{
    private $connect;

    public function __construct($_connect)
    {
        $this->connect = $_connect;
    }

    public function createStore($store)
    {

        $sql1 = "INSERT INTO stores(name) VALUE (?)";
        $stmt1 = $this->connect->prepare($sql1);
        $stmt1->bindParam(1, $store->getName());
        $stmt1->execute();

        $store_id = $this->connect->LastInsertID();
        $sql2 = "INSERT INTO storeProduct(store, product) VALUES ($store_id, :product_id)";
        $stmt2 = $this->connect->prepare($sql2);
        $stmt2->bindParam(':product_id', $product_id);
        foreach ($_POST['products'] as $product_id) {
            $stmt2->execute();
        }
    }

    public function getList()
    {
        $sql = "SELECT * FROM stores";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $store = new Store($item['id'], $item['name']);
            array_push($arr, $store);
        }
        return $arr;
    }

    public function edit($storeID, $newName)
    {
        $sql = "UPDATE stores SET name =  ? WHERE id = $storeID ";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $newName);
        $stmt->execute();
    }

    public function delete($storeID)
    {
        $sql = "DELETE FROM stores WHERE id=$storeID";
        $this->connect->query($sql);
    }


}