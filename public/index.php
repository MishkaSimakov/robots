<?php

$addr = [
'robots' => 'resources/index.robots.php',
'students' => 'resources/index.students.php',
'robot' => 'resources/show.robots.php',
'student' => 'resources/show.students.php',
'new_robot' => 'resources/create.robots.php',
'' => 'resources/index.robots.php'
];

$url = trim($_SERVER['REQUEST_URI'], '/');

if (array_key_exists($url, $addr)) {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $addr[$url];
    } else {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'resources/error.php';
    }