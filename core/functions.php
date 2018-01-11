<?php

function dd($data) {
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function isLogin()
{

}

function view($directory, $name, $data)
{
    extract($data);
    return require "../resources/views/{$directory}/{$name}.view.php";
}