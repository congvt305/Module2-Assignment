<?php


class ProductController
{
    private $productDB;
    private $storeDB;

    public function __construct()
    {
        $db = new DBConnect();
        $this->productDB = new ProductDB($db->connect());
        $this->storeDB = new StoreDB($db->connect());
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $stores = $this->getAllStore();
            include_once "view/product/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $product = new Product(null, $_POST['name'], $_POST['price'], $_POST['toppings']);
            $this->productDB->createProduct($product);
            header("location: index.php");
        }
    }

    public function getAllStore()
    {
        return $this->storeDB->getList();
    }

    public function getList()
    {
        $products = $this->productDB->getList();
        include_once "view/product/list.php";
    }


    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "view/product/edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $productID = $_GET['id'];
            $this->productDB->edit($productID, $_POST['name'], $_POST['price'], $_POST['toppings']);
            header("location: index.php");
        }
    }

    public function delete()
    {
        $productID = (int)$_GET['id'];
        $this->productDB->delete($productID);
        header("location: index.php");
    }

    public function getListMenu()
    {
        $store_id = (int)$_GET['id'];
        $products = $this->productDB->getListMenu($store_id);
        include_once "view/store/getProduct.php";
    }
}