<?php
namespace Usertwo;
class User  {
    public $name = "Shownok";
    public $deg = "Employee";
    public function userinfo(){
        echo "This is ". $this->name;
    }
}
