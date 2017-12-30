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
    public function students()
    {
        return view('students', 'index', compact('students'));
    }
    public function robot()
    {
        return view('robots', 'show', compact('robot'));
    }
    public function student()
    {
        return view('students', 'show', compact('student'));
    }

    public function newRobot()
    {
        $query = require '../core/bootstrap.php';
        return view('robots', 'newrobot', compact('query'));
    }
}