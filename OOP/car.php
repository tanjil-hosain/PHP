<?php
class car {
    public $name = "BMW";
    public $start = "start ";
    public $break = "break";
    public $reverse = "reverse";
    public $stop= " Stop";
    function runnig_car($s,$b,$r,$ss){
        echo $this -> name. " is runnig " .$s;
        echo "<br>";
        echo $this -> name. " is  " .$b;
        echo "<br>";
        echo $this -> name. " is  " .$r;
        echo "<br>";
        echo $this -> name. " is  " .$ss;

        
        // $this -> start = $s;
        // return $this-> start;
        
    }
}
$car = new car;
echo $car -> runnig_car( "Start", "Break", "reverse", "Stop!!");
