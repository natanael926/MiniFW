<?php

namespace Db;


/**
 * 
 * 
 * @author Natanael Acosta Crousset <natanael926@gmail.com>
 * @package Core\Db
 */
class DBAstration{

	/**
	 * @var DBAstration
	 * @access private
	 */
	private static $instance = null;

	private $conn = null;

	/**
	 * @return DBAstration
	 */
	public static function getInstance() 
	{
		if(self::$instance == null) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct() 
	{
		try {
			$nameDB = Config::getInstance()->get('name');
			$hostDB = Config::getInstance()->get('host');
			$argument = sprintf("mysql:dbname=%s;host=%s;", Config::getInstance()->get('name'), Confi);
			$this->conn = new PDO($argument, Config::getInstance()->get('user'), Config::getInstance()->get('pass'));
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}

		echo $this->name;
	}

	/**
	 * 
	 * @param $query String
	 * @param $tableName String
	 * @param Array 
	 */
	public function select($query, $tableName = null, $params = null) 
	{
		if ($tableName == null) {

		}

	}	


}