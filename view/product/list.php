<a href="?page=add"><input type="button" value="create product" class="btn btn-success"></a>
<div class="row mt-2">
    <?php foreach ($products as $product): ?>
        <div class="col-lg-4 col-md-6 mb-4 mt-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/milk_tea.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        Name: <br>
                        <a href="#"><?php echo $product->getName(); ?></a>
                    </h4>
                    <hr>
                    <h5>
                        $ <?php echo $product->getPrice(); ?>
                    </h5>
                    <hr>
                    <p class="card-text">
                        <b>Toppings: </b><br>
                        <?php echo $product->getToppings(); ?>
                    </p>
                    <hr>
                    <a href="?page=delete&id=<?php echo $product->getId(); ?>" onclick="return confirm('bạn có chắc chắn muốn xóa sản phẩm này ?')">
                        <input type="button" value="Delete" class="btn btn-outline-danger">
                    </a>
                    <a href="?page=edit&id=<?php echo $product->getId(); ?>&name=<?php echo $product->getName(); ?>&price=<?php echo $product->getPrice() ?>&toppings=<?php echo $product->getToppings(); ?>">
                        <input type="button" value="Edit" class="btn btn-outline-secondary">
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
