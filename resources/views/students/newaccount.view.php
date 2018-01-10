<?php
require '../resources/views/partials/head.view.php';
?>

<div>
    <h3>Регистрация ученика</h3>
</div>
<form method="post" enctype="multipart/form-data" action="addingaccount">
    <input type="text" class="reg-input" placeholder="Логин" name="account_name" required>
    <input type="password" class="reg-input" placeholder="Пароль" name="account_password" required>
    <input type="text" class="reg-input" placeholder="email" name="account_email" required>
    <h3>Фото ученика</h3>
    <input class="reg-input" type="file" accept="image/*" name="account_imgaddr" required>
    <input class="reg-input" type="submit">
</form>

<?php
require '../resources/views/partials/footer.view.php';
?>
