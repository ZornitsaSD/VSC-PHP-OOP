<?php 
class Model {

protected static $name = 'Model';

    public static function find(){
        echo static::$name;
    }
}

class Gap extends Model{

    protected static $name = 'Gap';
}

Model::find();
echo "<br>";
Gap::find();
