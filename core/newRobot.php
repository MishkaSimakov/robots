<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 16.12.2017
 * Time: 21:00
 */

$robots = $query->insert('robots', [
    'id' => '10',
    'name' => htmlspecialchars($_POST['robot_name'])
]);

require "../resources/views/robots/index.php";