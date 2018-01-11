<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 27.12.2017
 * Time: 20:15
 */

require "../core/functions.php";

class PageController
{
    public function home()
    {
        $robots = App::get('database')->selectAll('robots');
        return view('robots', 'index', compact('robots'));
    }

    public function robot()
    {
        if ($_GET['id'] != "") {
            $robot = App::get('database')->getFromId('robots', $_GET['id']);
            return view('robots', 'show', compact('robot'));
        } else {
            require '../resources/views/error/error.view.php';
        }
    }


    public function students()
    {
        $students = App::get('database')->selectAll('students');
        return view('students', 'index', compact('students'));
    }
    public function student()
    {
        if ($_GET['id'] != "") {
            $student = App::get('database')->getFromId('students', $_GET['id']);
            return view('students', 'show', compact('student'));
        } else {
            require '../resources/views/error/error.view.php';
        }
    }

    public function newRobot()
    {
        return view('robots', 'newrobot', compact('query'));
    }

    public function addingRobot()
    {
        require "../core/newRobot.php";
    }

    public function addingAccount()
    {
        require "../core/newAccount.php";
    }

    public function newAccount()
    {
        return view('students', 'newaccount', compact('student'));
    }
}