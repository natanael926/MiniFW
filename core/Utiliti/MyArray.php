<?php 

namespace Utiliti;


/**
 * 
 * @package Utiliti
 * @author Natanael Acosta C. <natanael926@gmail.com>
 */
class MyArray {

	private $array;

	public function __construct($key = null, $value = null) {

		$this->array = array();

		if($key != null) {
			$this->addElement($key, $value);
		} 
	}

	/**
	 * 
	 * @param mixted $key
	 * @param mixted $value
	 * 
	 */
	public function addElement($key, $value = null) 
	{
		if($value != null) {
			$this->array[$key] = $value;
		} else {
			array_push($this->array, $key); //key == the value
		}
	}

	/**
	 * @return Array
	 */
	public function get() 
	{
     	return $this->array;
	}

}
