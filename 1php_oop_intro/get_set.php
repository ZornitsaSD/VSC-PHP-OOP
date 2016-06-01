<?php 
class Liquid {
   	private $volume;
    private $basic_ingredient;

    public function __construct($vol, $bin){
		$this->volume = $vol;
		$this->basic_ingredient = $bin;
		}

	public function __get($name){
		echo "Getting $name property`s value - ";
		return $this->$name;

		}

	public function __set($name, $value){
		echo "Setting $name`s value to '$value'";
			if (property_exists($this, $name)) { 
				$this->$name = $value;
			}
		}
		
	}

$liq = new Liquid(5, 'bin');
echo "<p>";
echo $liq->volume;
echo "<br>";
echo $liq->basic_ingredient;
echo "</p>";

$liq->basic_ingredient = "gold";
echo "<p>";

echo $liq->basic_ingredient;
echo "</p>";
