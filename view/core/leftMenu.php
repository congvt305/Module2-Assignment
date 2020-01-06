<div class="col-lg-3 bg-secondary text-light">
    <h1 class="my-2">Milk tea store</h1>
    <div class="list-group mb-4">
        <?php foreach($stores as $store): ?>
        <a href="home.php?page=store&id=<?php echo $store->getId(); ?>&name=<?php echo $store->getName(); ?>" class="list-group-item bg-secondary text-light"><?php echo $store->getName(); ?></a>
        <?php endforeach; ?>
    </div>
</div>