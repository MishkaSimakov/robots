<?php
require '../resources/views/partials/head.view.php';
?>

<div>
    <h3>Добавление робота</h3>
</div>
<form METHOD="post" enctype="multipart/form-data" action="addingrobot">
    <input class="reg-input" placeholder="Название робота" name="robot_name" required>
    <textarea class="reg-input" placeholder="Описание робота" name="robot_description" required></textarea>
    <textarea class="reg-input" placeholder="Характеристика робота" name="robot_characteristic" required></textarea>
    <textarea class="reg-input" placeholder="Достижения робота" name="robot_achivments"></textarea>
    <h4>Программа робота</h4>
    <input type="file" class="reg-input">
    <h4>Модель робота</h4>
    <input type="file" class="reg-input">
    <h4>Фотография робота</h4>
    <input type="file" class="reg-input" accept="image/*" name = "robot_imgaddr" required>
    <input class="reg-input" type="submit">
</form>

<?php
require '../resources/views/partials/footer.view.php';
?>