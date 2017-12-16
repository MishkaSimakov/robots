<?php
/**
 * Created by PhpStorm.
 * User: MikeS
 * Date: 16.12.2017
 * Time: 10:13
 */

$config = require 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));
