<?php
include_once "model/database/DBConnect.php";
include_once "controller/ProductController.php";
include_once "controller/StoreController.php";
include_once "model/ProductDB.php";
include_once "model/StoreDB.php";
include_once "model/Store.php";
include_once "model/Product.php";

$productController = new ProductController();
$storeController = new StoreController();
$stores = $storeController->getList();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php include_once "view/core/nav.php" ?>
<div class="container">
    <div class="row">
        <?php include_once "view/core/leftMenu.php"; ?>
        <div class="col-lg-9 bg-light">
            <?php
            $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
            switch ($page) {
                case "store":
                    $productController->getListMenu();
                    break;
                case "add":
                    $storeController->create();
                    break;
                case "delete":
                    $storeController->delete();
                    break;
                case "edit":
                    $storeController->edit();
                    break;
                default:
                    include_once "view/store/list.php";
                    break;
            }
            ?>
        </div>
    </div>
</div>
<?php include_once "view/core/footer.php" ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</body>
</html>