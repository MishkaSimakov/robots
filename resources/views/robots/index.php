<?php
require '../resources/templates/menu/menu.php';
?>

<!-- Верх -->

<?php
$query = require '../core/bootstrap.php';

$robots = $query->selectAll('robots');

?>

<div class="robots">

    <a href="newrobot.php"><div class="robot">
        <div class="name-robot">
            <h2>Добавить робота</h2>
        </div>
    </div></a>

    <?php foreach ($robots as $robot): ?>
    <a href="show.php"><div class="robot">
        <div class="img-div-robot"><img class="img-robot" src= "<?= $robot->img_addr ?>" ></div>
        <div class="name-robot">
            <h2><?= $robot->name ?></h2>
        </div>
    </div></a>
    <?php endforeach; ?>

<!-- Низ -->


<?php
require '../resources/templates/menu/footer.php';
?>