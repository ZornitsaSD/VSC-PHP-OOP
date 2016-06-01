<?php 

class Substances {
	var $name;
	private $volume;
	

	function __construct($vol, $n){
		$this->volume = $vol;
		$this->name = $n;
		$this->print_info();
	}

	function evaporates(){
		$this->volume -= 10;
	}
	private function print_info(){
		echo '<p>name - '.$this->name.'</p>';
		echo 'volume - '.$this->volume;

	}
}

$water = new Substances(10, 'water');
// echo $water->volume;
// echo '<br>';
// echo $water->name;
// $water->print_info();

// $water->evaporates();

//$water->print_info();

