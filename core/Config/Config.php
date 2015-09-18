<?php 

namespace Core\Config;

/**
 * 
 * @author Rudys Natanael Acosta Crousset <natanael926@gmail.com>
 * @version 0.1
 */
class Config {

	/**
	 * @var Config
	 * @access private
	 */
	private static $instance = null;

	/**
	 * List of all parameter settings
	 *  
	 * @var Config
	 * @access private
	 */ 
	private $rows = [];

	/**
	 * 
	 * @return  Config 
	 */
	public static function getInstance()
	{

		if(self::$instance == null) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * @return void
	 */
	private function readIniFile()
	{
		$this->rows = parse_ini_file("config.ini", true);
	}

	/**
	 * @param  $name
	 * @return string
	 */
	public function get($name) 
	{
		$this->readIniFile();
		var_dump($this->rows);
		return trim($this->rows[$name]);
	}

}