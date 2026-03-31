<?php
class Classone {
    protected $a = 10;
    public function changeValue($b){
        $this->a=$b;
    }
}

class Classtwo extends Classone{
    protected$b = 10;

    public function changeValue($b)
    {
        $this->b = 10;
        parent::changeValue($this->a + $this->b);
    }
    public function displayvalues(){
        print "a:{$this->a}, b:{$this->b}\n";
    }
}
$obj = new Classtwo();
$obj->changeValue(20);
$obj->changeValue(10);
$obj->displayvalues();