<?php
class User{
    public static $name = "hello World!". "<br>";
    const name = "Heloo world!!!!!!!". "<br>";

    public static function info(){
        echo " this is Bangladesh";
    }
}

echo user::info();
echo user::$name;
echo user::name;