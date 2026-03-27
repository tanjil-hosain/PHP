<?php
class Car {
    public $model="sd12";
    public $color="black";
    public $name = "Toyota";
    function info(){    // local function,, --->> eta sudu scope ba class name dhore call kora jay!!!
        echo "Please Quit this Earth";
    }
}
 $car =new Car();   // ei class k call korte hole new dore class ta ekta variable rekhe call korte

 echo $car ->model; 
 echo "</br>";
 echo $car ->info(); 
  // ekhane object er varible $(dollar) sing use kora jabe na,, -->>>> use korle error ase!!!

 class bar {
    public $model="sd12";
    public $color="black";
    public $name = "Toyota";
}
// echo class bar ->model;   // direct call korle class e error ase tai class k ekta new vaeibale e rakgte hobe,, >> that means new ekta varivale nite hobe
?>