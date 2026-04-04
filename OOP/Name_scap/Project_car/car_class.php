<?php
namespace Carname;
class Car {
    public $name = "BMW";
    public $model = "i80";
    public function carInfo(){
        echo "This is ". $this->name;
    }
}
$result = new Car();
$result->carInfo();