<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Создание робота</title>
</head>
<body>
	<?php
require 'menu/menu.php';
	?>

	<form method="POST" action="../controllers/create.robots.controller.php" enctype="multipart/form-data">
		
<input type="file" name="photo" accept="image/*" id="1"><label for="1">Фотография робота</label>
<input type="text" name="name" id="2"><label for="2">Название робота</label>
<input type="text" name="advantages" id="3"><label for="3">Преймущества робота</label>
<input type="file" name="program" id="4"><label for="4">Программа</label>
<input type="file" name="model" id="5"><label for="5">3D модель</label>
<textarea name="description" id="6"></textarea><label for="6">Описание</label>


	</form>

	<?php
require 'menu/footer.php';
	?>
</body>
</html>