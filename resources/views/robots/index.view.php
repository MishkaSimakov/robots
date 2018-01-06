<?php
require '../resources/views/partials/head.view.php';
?>

<div class="robots">

    <a href="/new_robot"><div class="robotinrobots">
        <div class="name-robotinrobots">
            <h2>Добавить робота</h2>
        </div>
    </div></a>

    <?php foreach ($robots as $robot): ?>

    <a href="/robot?id=<?= $robot->id ?>"><div class="robotinrobots">
        <div class="img-div-robot"><img src="<?= "img/{$robot->img_addr}" ?>" class="img-robotinrobots"></div>
        <div class="name-robotinrobots">
            <h2><?= $robot->name ?></h2>
        </div>
    </div></a>
    <?php endforeach; ?>

<!-- Низ -->


<?php
    require '../resources/views/partials/footer.view.php';
?>