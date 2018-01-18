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
    <h3><pre><?= $robot[0]->description ?></pre></h3>
</div>
<div class="robot-procuring">
    <a href="<?= "programs/{$robot[0]->program_addr}"?>"><div class="robot-program"><p>Программа робота</p></div>
    <a href="<?= "3d_models/{$robot[0]->model3d_addr}"?>"><div class="robot-model"><p>Модель робота</p></div></a>
</div>

<div class="robot-characteristic">
    <h2>Характеристики</h2>
    <h3><pre><?= $robot[0]->characteristic ?></pre></h3>
</div>
<div class="robot-achievements">
    <h2>Достижения</h2>
    <h3><pre><?= $robot[0]->achivments ?></pre></h3>
</div>

<?php
require '../resources/views/partials/footer.view.php';
?>