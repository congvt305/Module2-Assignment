<div class="ml-4 mt-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Add Store</h5>
            <form method="post">
                <label class="mt-2 mb-3">Name's Store: </label>
                <br>
                <input type="text" name="name" placeholder="name's store">

                <label class="mt-2 mb-3">Product's store:</label>
                <br>
                <?php foreach ($products as $product): ?>
                    <input type="checkbox" value="<?php echo $product->getId(); ?>" name="products[]"><?php echo $product->getName(); ?>
                <?php endforeach; ?>
                <br>
                <input type="submit" value="create" class="btn btn-outline-success mt-3">
            </form>
        </div>
    </div>
</div>
