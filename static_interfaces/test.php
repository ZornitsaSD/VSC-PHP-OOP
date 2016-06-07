<?php 

class Animal {
    public static $number = 0;
    
    public function __construct(){
    	self::$number++;    	
      }

    public static function display_num(){
        return static::$number;
        }
    
}

class Bird extends Animal {
	public static $number = 0;

    public function __construct(){
    	self::$number++;
    }
  }
class Mammals extends Animal {
	public static $number = 0;

    public function __construct(){
    	self::$number++;
    }
  }
$animal = new Animal();
$animal1 = new Animal();
$animal2 = new Animal();

$bird = new Bird();
$bird = new Bird();

$mammals = new Mammals();

echo "animals - " . Animal::display_num();
echo "<br>";
echo 'birds - ' . Bird::display_num();
echo "<br>";
echo 'mammals - ' . Mammals::display_num();
?>
<?php 

class Vehicles{
	public static $number = 0;
	
	function __construct(){
		self::$number++;  
	}
	
	 public static function display_num(){
        return self::$number;
        }
}

class Car extends Vehicles{
	
public static $number = 0;

	public function __construct(){
		self::$number++;
	}
}

$veh1 = new Vehicles();
$veh3 = new Vehicles();
echo Vehicles::$number;

echo "<br>";
$veh2 = new Vehicles();
echo Vehicles::$number;

echo "<br>";
$car1 = new Car();
echo Car::display_num();
//echo Car::count();

?>
<?php 

class Person{

}
class Teacher extends Person{
	var $students = array();
}
class Student extends Person{
	var $teachers = array();

	function display(){
		$teachers = new Teacher();
		foreach ($teachers as $key => $value) {
			//echo ...
		}
	}

}