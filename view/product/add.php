<div class="row ml-4 mt-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Add Product</h5>
            <form method="post">
                <div class="form-group">
                    <label>Name: </label>
                    <input type="text" class="form-control" placeholder="name's product" name="name"
                           value="<?php echo $_GET['name'] ?>">
                </div>
                <div class="form-group">
                    <label>Price: </label>
                    <input type="number" class="form-control" placeholder="price's product" name="price"
                           value="<?php echo $_GET['price'] ?>">
                </div>
                <div class="form-group">
                    <label>Toppings: </label>
                    <input type="text" class="form-control" placeholder="toppings" name="toppings"
                           value="<?php echo $_GET['toppings'] ?>">
                </div>
                <label>Stores: </label>
                <div class="form-check">
                    <?php foreach ($stores as $store): ?>
                        <input type="checkbox" value="<?php echo $store->getId(); ?>" name="stores[]">
                        <label class="form-check-label"><?php echo $store->getName(); ?></label>
                    <?php endforeach; ?>
                </div>
                <input type="submit" value="add" class="btn btn-outline-secondary mt-3">
            </form>
        </div>
    </div>

</div>
