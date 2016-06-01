<?php 
class Person{
	var $name;
	var $birthdate;
	var $address;

	function __construct($per_name, $per_bdate, $per_addr){
		$this->name = $per_name;
		$this->birthdate = $per_bdate;
		$this->address = $per_addr;
	}
	
}

class Teachers extends Person {
	var $education;
	var $subject;

	function __construct($per_name, $per_bdate, $per_addr,$ed, $sub){
	
	parent::__construct($per_name, $per_bdate, $per_addr);
	$this->education = $ed;
	$this->subject = $sub;
	
	}
}

$teacher = new Teachers(1, 2, 3, 4, 5);

echo $teacher->name;
echo "<br>";
echo $teacher->subject;


class Sudents extends Person {
	var $grade;

	function actual_grade(){
		//
	}

}