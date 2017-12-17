<?php

$addr = [
'robots' => 'resources/views/robots/index.php',
'students' => 'resources/views/students/index.php',
'robot' => 'resources/views/robots/show.php',
'student' => 'resources/views/students/show.php',
'new_robot' => 'resources/views/robots/newrobot.php',
'' => 'resources/views/main/index.php',
    'addingrobot' => 'core/newRobot.php'
];

$url = trim($_SERVER['REQUEST_URI'], '/');

if (array_key_exists($url, $addr)) {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $addr[$url];
    } else {
        require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'resources/error.php';
    }