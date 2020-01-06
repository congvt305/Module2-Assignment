<div class="card">
    <div class="card-header text-secondary">
        <h1 class="my-1 text-center mt-4 ">
            Menu's <?php $name_store = $_GET['name']; echo $name_store; ?>
        </h1>
        <input class="btn btn-outline-secondary float-left" type="submit" value="Filter">
        <p class="float-right">Sort By:
            <select name="sortBy" class="selection">
                <option value="name">Name</option>
                <option value="price">Price</option>
            </select>
        </p>
    </div>
    <div class="mt-1 ml-2">
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
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

