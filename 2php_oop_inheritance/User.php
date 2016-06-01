<?php 

class User {
	var $prop;

	function __constructor($p){
		$this->prop = $p;
	}

	private function login(){
		//action
		$this->prop;
	}
}
$prop = 23;
$user = new User($prop);