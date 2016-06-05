<?php 
class Vehicle{
	public static $num = 0;

	function __construct(){
		self::$num++;
	}
	public static function display_num(){
		return static::$num;
	}
}

class Car extends Vehicle{
	public static $num = 0;
	function __construct(){
		self::$num++;
	}
}

$veh1 = new Vehicle();
$veh2 = new Vehicle();
$veh3 = new Vehicle();

$car1 = new Car();
$car2 = new Car();
$car3 = new Car();
$car4 = new Car();

echo Vehicle::display_num().' objects of class Vehicle.';
echo "<br>";
echo Car::display_num() . ' objects of class Car.';