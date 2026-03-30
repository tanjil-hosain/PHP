<?php
class User{
    public static $name = "hello World!". "<br>";  // static er kaj hocche code short kora new object creatw kora lage na
    const name = "Heloo world!!!!!!!". "<br>";

    public static function info(){
        echo " this is Bangladesh";
    }
}

echo User::info();
echo User::$name;
echo User::name;