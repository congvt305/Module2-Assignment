<div class="table col-md-9">
    <a href="?page=add"><input type="button" value="create store" class="btn btn-success"></a>
    <table>
        <tr>
            <th>STT</th>
            <th>Store</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($stores as $stt => $store): ?>
            <tr>
                <td><?php echo  ++$stt; ?></td>
                <td><?php echo $store->getName(); ?></td>
                <td><a href="?page=delete&id=<?php echo $store->getId(); ?>" onclick="return confirm('bạn có chắc chắn muốn xóa cửa hàng này ?')"><input type="button" value="delete" class="btn btn-outline-danger"></a></td>
                <td><a href="?page=edit&id=<?php echo $store->getId(); ?>&name=<?php echo $store->getName();?>"><input type="button" value="edit" class="btn btn-outline-success"></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>