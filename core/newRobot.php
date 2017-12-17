<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 16.12.2017
 * Time: 21:00
 */

$query = require '../core/bootstrap.php';

$robots = $query->insert('robots', [

    'name' => htmlspecialchars($_POST['robot_name']),
    'description' => htmlspecialchars($_POST['robot_description']),

    ]);

require "../resources/views/robots/show.php";