<?php

define('__ROOT__', dirname(dirname(__FILE__)));

require 'vendor/autoload.php';

use Db\Db;
use Db\DBAbstration;
use Config\Config;

$conn = DBAbstration::getInstance();
// $p = $conn->select("select * from user");

$p = new Db();
$p->create();



// use Core\Config\Config; 

// var_dump(Config::getInstance()->get('host'));