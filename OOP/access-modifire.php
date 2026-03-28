<?php
class Newhosizone{
    public $place = "Dhanmondi";  // public gula j kono place use kora jay.
    private $sequrity = "pass";    // privet ta sudu scope ba block ba prants e use kora jay
    protected $pass="123";          // protected ta hocche dudu child e use kora jay!!

    public function newhor(){
        echo "My training center Pass is ". $this->sequrity;
    }
}
$nh=new  Newhosizone();
$nh->newhor();    // privet class ta hoccche scope ba block e usde kora jay er bahire kora jay na!!


class Newhor_student extends Newhosizone{
    public function show(){
        echo "My Password Is ".$this -> pass;
    }

}
$nhs= new Newhor_student();  
$nhs-> show();      // protected class child e use kora jay 