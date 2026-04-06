<?php 
namespace Userone;
class User  {
    public $name = "Tanjil";
    public $deg = "Employee";
    public function userinfo(){
        echo "This is ". $this->name;
    }
}
