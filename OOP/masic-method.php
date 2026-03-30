<?php
class car {
    public $name;
    public $color;
    public function __destruct()
    {
        echo " <br> Bye";

    }
    public function __construct($n, $c) // construct() e function call kora lage na object argument Value 
    {
        echo "Hello ".$this -> name=$n. " is ".$this ->color=$c;
    }
} $car = new car(" Marcetize ", " Black");
?>