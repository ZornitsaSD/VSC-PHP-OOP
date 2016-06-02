<?php 

class Person{
	var $name;
	var $age;

	function __construct($p_name, $p_age){
		$this->name = $p_name;
		$this->age = $p_age;

	}

	function grow_old($years){
		$one = 'one';
		echo $this->name .' grows old .';
		echo "<br>";
		echo $years;
		$this->two();
	}

	function two(){
		///action
	}
}
$param = 12;
$person = new Person('Pesho', 12);
//echo $person->name = 'Pesho';
echo "<br>";
//echo $person->age = 12;

$person->grow_old($param);
