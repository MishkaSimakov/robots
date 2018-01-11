<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 09.01.2018
 * Time: 19:28
 */

$query = require '../core/bootstrap.php';

if ($_FILES['account_imgaddr']['error'] != 1) {

    $name = $_FILES['account_imgaddr']['name'];
    $path = $_FILES['account_imgaddr']['tmp_name'];
    $type = explode(".", $name);
    $type = strtolower(end($type));

    $file_name_new = uniqid("", true) . "." . $type;

    move_uploaded_file($path, "img/{$file_name_new}");
}




$robots = App::get('database')->insert('students', [
    'name' => htmlspecialchars($_POST['account_name']),
    'password' => htmlspecialchars($_POST['account_password']),
    'email' => htmlspecialchars($_POST['account_email']),
    'robots_count' => 0,
    'img_addr' => $file_name_new,
]);