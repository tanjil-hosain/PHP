<?php


abstract class Shape {
    public static function info() {
        return "";
    }

   
    abstract public function getArea($value);
}

class Square extends Shape {
    public function getArea($length) {
        return "বর্গক্ষেত্রের ক্ষেত্রফল: " . ($length * $length);
    }
}

// ১. স্ট্যাটিক মেথড কল (অবজেক্ট ছাড়া)
echo Shape::info(); 

echo "<br>";

// ২. অ্যাবস্ট্রাক্ট ক্লাসের ইমপ্লিমেন্টেশন ব্যবহার
$mySquare = new Square();
echo $mySquare->getArea(5); // আউটপুট: ২৫

?>