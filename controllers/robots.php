<?php

$robots = App::get('database')->selectAll('robots');

require '../resources/views/robots/index.view.php';