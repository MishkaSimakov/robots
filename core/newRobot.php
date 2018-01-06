<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 16.12.2017
 * Time: 21:00
 */

$query = require '../core/bootstrap.php';

//сохранение изображения робота

if ($_FILES['robot_imgaddr']['error'] != 1) {

    $name = $_FILES['robot_imgaddr']['name'];
    $path = $_FILES['robot_imgaddr']['tmp_name'];
    $type = explode(".", $name);
    $type = strtolower(end($type));

    $file_name_new_img = uniqid("", true) . "." . $type;

    move_uploaded_file($path, "img/{$file_name_new_img}");
}



//сохранение программы робота

if ($_FILES['robot_program']['error'] != 1) {

    $name = $_FILES['robot_program']['name'];
    $path = $_FILES['robot_program']['tmp_name'];
    $type = explode(".", $name);
    $type = strtolower(end($type));

    $file_name_new_robot = uniqid("", true) . "." . $type;

    move_uploaded_file($path, "programs/{$file_name_new_robot}");
}


//сщхранение 3d модели робота

if ($_FILES['robot_imgaddr']['error'] != 1) {

    $name = $_FILES['robot_imgaddr']['name'];
    $path = $_FILES['robot_imgaddr']['tmp_name'];
    $type = explode(".", $name);
    $type = strtolower(end($type));

    $file_name_new = uniqid("", true) . "." . $type;

    move_uploaded_file($path, "img/{$file_name_new}");
}




$robots = App::get('database')->insert('robots', [
    'name' => htmlspecialchars($_POST['robot_name']),
    'description' => htmlspecialchars($_POST['robot_description']),
    'characteristic' => htmlspecialchars($_POST['robot_characteristic']),
    'achivments' => htmlspecialchars($_POST['robot_achivments']),
    'img_addr' => $file_name_new_img,
]);

$a = new PageController();
$a->home();