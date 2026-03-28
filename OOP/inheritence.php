<?php
class Student {
    public $name;
    public $age;
    public $address;
    public $id;
    public $subject;


    public function details($n,$a){
        echo " <br>My name Is ".$this->name = $n . "And my age is ".$this->age=$a;
    }

    public function __construct()
    {
        echo ("Hello World!!");
    }

    public function __destruct()
    {
        echo (" <br> Please Quit this Earth!");
    }
}

$student = new Student();
$student->details("Tanjil. ", 23);
?>