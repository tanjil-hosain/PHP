<?php
class car {
    public $name;
    public $color;
    public function __destruct()
    {
        echo " <br> Bye";

    }
    public function __construct($n, $c)
    {
        echo "Hello ".$this -> name=$n. " is ".$this ->color=$c;
    }
} $car = new car(" Marcetize ", " Black");
?>