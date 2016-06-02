<?php 

final class Demo{
	var $a;
	var $b;
	var $c;

	function __construct($aa, $bb, $cc){
		$this->a = $aa;
		$this->b = $bb;
		$this->c = $cc;
	}
}

class Demo_child extends Demo{
	var $d;
	var $e;

	function __construct($aa, $bb, $cc, $dd, $ee){
		parent::__construct($aa, $bb, $cc);
		$this->d = $dd;
		$this->e = $ee;
	}
}

$child = new Demo_child(1, 2, 3, 4, 5);