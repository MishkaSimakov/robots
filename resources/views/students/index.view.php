<?php
require '../resources/views/partials/head.view.php';
?>

<!-- Верх -->


<div class="students">
    <?php foreach ($students as $student): ?>
    <a href="/student?id=<?= $student->id ?>"><div class="studentinstudents">
                <img class="img-studentinstudents" src="<?= "img/{$student->img_addr}" ?>">
            <div class="name-studentinstudents"><h2><?= $student->name ?></h2></div>
        </div></a>
    <?php endforeach; ?>
</div>



<!-- Низ -->


<?php
require '../resources/views/partials/footer.view.php';
?>
