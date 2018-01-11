<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 11.01.2018
 * Time: 15:49
 */

class Account
{
    public static function isLogin()
    {
        return $_COOKIE['isLogin'];
        die(var_dump($_COOKIE));
    }

    public function login($login, $password)
    {
        $students = App::get('database')->selectAll('students');
        foreach ($students as $student) {
            if ($this->$login = $student->name && $this->$password = $student->password) {
                setcookie('isLogin', 'true');
                return $student->id;
            } else {
                return "error";
            }
        }
    }
}