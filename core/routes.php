<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 21.12.2017
 * Time: 19:47
 */

    $router->get('robots', 'PageController@home');
    $router->get('', 'PageController@home');
    $router->get('students', 'PageController@students');
    $router->get('robot','PageController@robot');
    $router->get('student', 'PageController@student');
    $router->get('new_robot', 'PageController@newRobot');
    $router->get('new_account', 'PageController@newAccount');

    $router->post('addingrobot', 'PageController@addingRobot');
    $router->post('addingaccount', 'PageController@addingAccount');

