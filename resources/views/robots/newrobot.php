<?php
require '../resources/templates/menu/menu.php';
?>

<div>
    <h3>Добавление робота</h3>
</div>
<form>
    <input class="reg-input" placeholder="Название робота">
    <textarea class="reg-input" placeholder="Описание робота"></textarea>
    <textarea class="reg-input" placeholder="Характеристика робота"></textarea>
    <textarea class="reg-input" placeholder="Достижения робота"></textarea>
    <h4>Программа робота</h4>
    <input type="file" class="reg-input">
    <h4>Модель робота</h4>
    <input type="file" class="reg-input">
    <h4>Фотография робота</h4>
    <input type="file" class="reg-input">
    <input class="reg-input" type="submit">
</form>

<?php
require '../resources/templates/menu/footer.php';
?>