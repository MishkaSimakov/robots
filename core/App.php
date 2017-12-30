<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 21.12.2017
 * Time: 19:38
 */

class App
{
 protected static $registry = [];
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("Нет такого значения!");
        }
        return static::$registry[$key];
    }

}