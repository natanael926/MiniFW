<?php

use Core\Db\DBAstration;
use Config\Config;
define('__ROOT__', dirname(dirname(__FILE__))); 

require 'vendor/autoload.php';

echo Config::getInstance()->get('host');


// use Core\Config\Config; 

// var_dump(Config::getInstance()->get('host'));