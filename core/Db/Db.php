<?php 

namespace Db;

use Db\DBAbstration;

class Db extends DBAbstration {
	
	protected $args = [];
	
	protected $name = 'uesr';
	
	/**
	 * New rows introduse
	 * 
	 * @param Array $args
	 */
	public function create() {
		
		$args = ["name" => "tito", "pass" => '123'];
		
		
		foreach ($args as $k => $v) {
			$argsList[] = ['key' => $k, 'keyPdo' => ':'.$k, 'value' => $v];
		}
		
		$this->args = $argsList;
		parent::create();
	}
	
}