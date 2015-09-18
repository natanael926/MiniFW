<?php

use Core\Db\DBAstration;
define('__ROOT__', dirname(dirname(__FILE__))); 

require_once(__ROOT__ . '/MiniFW/core/Config/Config.php');
require_once(__ROOT__ . '/MiniFW/core/Db/DBAbstration.php');


class PP extends DBAstration {
	
	public $name = "Hola";
	
}

$p = new PP();

// use Core\Config\Config; 

// var_dump(Config::getInstance()->get('host'));