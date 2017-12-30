<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 21.12.2017
 * Time: 19:53
 */

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}