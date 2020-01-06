<form method="post">
    <input type="text" name="name" value="<?php echo $_GET['name'] ?>">
    <input type="submit" value="edit" onclick="return confirm('bạn có chắc chắn với thay đổi này ?')">
</form>