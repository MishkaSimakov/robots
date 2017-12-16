<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 16.12.2017
 * Time: 10:09
 */

class Connection
{
    public static function make($config)
    {
        try {

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}