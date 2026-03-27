<?php
class Dar {
    public $model="sd12";
    public $color="black";
    public $name = "Toyota";
    function info($c){    // local function,, --->> eta sudu scope ba class name dhore call kora jay!!!
        echo "Please Quit this Earth";
        $this->color = $c;
        return $this-> color;
    }
}
 $car =new Dar();   // ei class k call korte hole new dore class ta ekta variable rekhe call korte

 echo $car ->model; 
 echo "</br>";
 echo $car ->info("green"); 
  // ekhane object er varible $(dollar) sing use kora jabe na,, -->>>> use korle error ase!!!

 class bar {
    public $model="sd12";
    public $color="black";
    public $name = "Toyota";
}
// echo class bar ->model;   // direct call korle class e error ase tai class k ekta new vaeibale e rakgte hobe,, >> that means new ekta varivale nite hobe
?>