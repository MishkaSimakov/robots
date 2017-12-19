<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 16.12.2017
 * Time: 21:00
 */

$query = require '../core/bootstrap.php';

if ($_FILES['robot_imgaddr']['error'] != 1) {

    $name = $_FILES['robot_imgaddr']['name'];
    $path = $_FILES['robot_imgaddr']['tmp_name'];
    $type = explode(".", $name);
    $type = strtolower(end($type));

    $file_name_new = uniqid("", true) . "." . $type;

    move_uploaded_file($path, "../img/{$file_name_new}");
}

$robots = $query->insert('robots', [

    'name' => htmlspecialchars($_POST['robot_name']),
    'description' => htmlspecialchars($_POST['robot_description']),
    'characteristic' => htmlspecialchars($_POST['robot_characteristic']),
    'achivments' => htmlspecialchars($_POST['robot_achivments']),
    'img_addr' => $file_name_new
]);

require "../resources/views/robots/show.php";