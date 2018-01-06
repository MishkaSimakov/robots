<?php
require '../resources/views/partials/head.view.php';
?>

<div class="robot-information">
    <div class="robot">
        <img class="img-robot" src="<?= "img/{$robot[0]->img_addr}"?>">
        <div class="name-robot"><h2><?= $robot[0]->name ?></h2></div>
    </div>
</div>
<div class="add-information">
    <?= $robot[0]->description ?>
</div>
<div class="robot-procuring">
    <div class="robot-program"><p>Программа робота</p></div>
    <div class="robot-model"><p>Модель робота</p></div>
</div>

<div class="robot-characteristic">
    <h2>Характеристики</h2>
    <h3><?= $robot[0]->characteristic ?></h3>
</div>
<div class="robot-achievements">
    <h2>Достижения</h2>
    <h3><?= $robot[0]->achivments ?></h3>
</div>

<?php
require '../resources/views/partials/footer.view.php';
?>