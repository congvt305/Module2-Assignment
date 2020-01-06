<div class="row ml-4 mt-3">
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
        <input type="submit" value="edit" class="btn btn-outline-secondary"
               onclick="return confirm('bạn có chắc chắn muốn sửa thông tin sản phẩm này? ')">
    </form>
</div>