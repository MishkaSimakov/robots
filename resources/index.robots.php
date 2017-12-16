<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/app.css">
	<meta charset="UTF-8">
	<title>robots</title>
</head>
<body>

	<?php
require 'menu/menu.php';
	?>

<!-- список роботов -->

	<a href="new_robot"><div class = "robot">
		<img src="../img/add robot.png" class="add">
		<h2 class="title">добавить конструкцию</h2>
	</div></a>

    <?php
    $query = require '../core/bootstrap.php';

        $robots = $query->selectAll('robots');

    ?>

    <?php foreach ($robots as $robot): ?>
	<a href="/robot"><div class = "robot">
		<img class = "robimg" src="<?= $robot->img_addr ?>">
		<h2 class="title"><?= $robot->name ?></h2>
	</div></a>
    <?php endforeach; ?>


	<?php
require 'menu/footer.php';
	?>
</body>
</html>