<?php


class ProductDB
{
    private $connect;

    public function __construct($_connect)
    {
        $this->connect = $_connect;
    }

    public function createProduct($product)
    {
        $sql = "INSERT INTO products(name, price, toppings) VALUE (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getPrice());
        $stmt->bindParam(3, $product->getToppings());
        $stmt->execute();

        $product_id = $this->connect->LastInsertID();
        $sql2 = "INSERT INTO storeProduct(store, product) VALUES (:store_id, $product_id)";
        $stmt2 = $this->connect->prepare($sql2);
        $stmt2->bindParam(':store_id', $store_id);
        foreach ($_POST['stores'] as $store_id) {
            $stmt2->execute();
        }
    }

    public function getList()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['id'], $item['name'], $item['price'], $item['toppings']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function edit($productID, $newName, $newPrice, $newToppings)
    {
        $sql = "UPDATE products SET name =  ?, price = ?, toppings = ? WHERE id = $productID ";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $newName);
        $stmt->bindParam(2, $newPrice);
        $stmt->bindParam(3, $newToppings);
        $stmt->execute();
    }

    public function delete($productID)
    {
        $sql = "DELETE FROM products WHERE id=$productID";
        $this->connect->query($sql);
    }

    public function getListMenu($store_id)
    {
        $sql = "SELECT s.name as 'shop_name', p.name as 'product_name', p.price, p.toppings
                FROM storeProduct sp
                INNER JOIN stores s ON s.id = sp.store
                INNER JOIN products p ON p.id = sp.product
                WHERE s.id = $store_id
                ";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['id'],$item['product_name'], $item['price'], $item['toppings']);
            array_push($arr, $product);
        }
        return $arr;
    }
}