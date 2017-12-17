<?php
require '../resources/templates/menu/menu.php';
?>

<!-- Верх -->

<?php
$query = require '../core/bootstrap.php';

$robots = $query->selectAll('robots');

dd(__DIR__ . '\..\..\..\img\мем.png');
?>

<div class="robots">

    <a href="/new_robot"><div class="robotinrobots">
        <div class="name-robotinrobots">
            <h2>Добавить робота</h2>
        </div>
    </div></a>

    <?php foreach ($robots as $robot): ?>
    <a href="/robot"><div class="robotinrobots">
        <div class="img-div-robot"><img src="" class="img-robotinrobots"></div>
        <div class="name-robotinrobots">
            <h2><?= $robot->name ?></h2>
        </div>
    </div></a>
    <?php endforeach; ?>

<!-- Низ -->


<?php
require '../resources/templates/menu/footer.php';
?>