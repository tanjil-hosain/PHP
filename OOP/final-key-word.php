<?php
class A {
    public function info(){
        echo"Heloo World!";
    }
}

final class B extends A{          // final use korle oita k r extend kora jay na!!
    public function info2(){
        echo "Whtasup, Guys";
    }
}

class C {
    public function info3(){
        echo "Show All";
    }
}

$r = new B();
$r->info2();
$r->info();