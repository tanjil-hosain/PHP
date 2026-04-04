<?php
class User  {
    public $name = "BMW";
    public $model = "i80";
    public function userinfo(){
        echo "This is ". $this->name;
    }
}
$result = new User();
$result-> userinfo();