<?php
require '../resources/views/partials/head.view.php';
?>

<div class="student-information">
    <div class="student">
        <img class="img-student" src="<?= "img/{$student[0]->img_addr}"?>">
        <div class="name-student"><h2><?= $student[0]->name ?></h2></div>
    </div>
</div>
<div class="add-information">
    <!--Миша Симаков победитель по жизни в хорошем смысле. Он поучавствовал в большом количестве соревнований. Он побывал в Санкт-Петербурге, Москве, Морти-Рики, Таганрог, Цимлянск, Ростов-на-Дону.-->
</div>


<?php
require '../resources/views/partials/footer.view.php';
?>
