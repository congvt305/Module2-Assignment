<?php


class StoreController
{
    public $storeDB;
    public $productDB;

    public function __construct()
    {
        $db = new DBConnect();
        $this->storeDB = new StoreDB($db->connect());
        $this->productDB = new ProductDB($db->connect());
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $products = $this->getAllProduct();
            include_once "view/store/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $store = new Store(null, $_POST['name']);
            $this->storeDB->createStore($store);
            header("location: home.php");
        }
    }

    public function getAllProduct()
    {
        return $this->productDB->getList();
    }

    public function getList()
    {
        return $this->storeDB->getList();
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "view/store/edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $storeID = $_GET['id'];
            $this->storeDB->edit($storeID, $_POST['name']);
            header("location: home.php");
        }
    }

    public function delete()
    {
        $storeID = $_GET['id'];
        $this->storeDB->delete($storeID);
        header("location: home.php");
    }


}