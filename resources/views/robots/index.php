<?php
require '../resources/templates/menu/menu.php';
?>

<!-- Верх -->

<?php
$query = require '../core/bootstrap.php';

$robots = $query->selectAll('robots');

?>

<div class="robots">

    <a href="/new_robot"><div class="robotinrobots">
        <div class="name-robotinrobots">
            <h2>Добавить робота</h2>
        </div>
    </div></a>

    <?php foreach ($robots as $robot): ?>
    <a href="/robot"><div class="robotinrobots">
        <div class="img-div-robot"><img class="img-robotinrobots" src= "<?= $robot->img_addr ?>" ></div>
        <div class="name-robotinrobots">
            <h2><?= $robot->name ?></h2>
        </div>
    </div></a>
    <?php endforeach; ?>

<!-- Низ -->


<?php
require '../resources/templates/menu/footer.php';
?>