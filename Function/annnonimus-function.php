<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Annonimus Function -->
     <?php
     $test = function ($a,$b){
        echo $a + $b;

     };
     echo "The Addition is <br>";
     echo $test(4,5);
     echo "<br>";

     ?>


 <?php
     $test = function ($a,$b,$c){
        echo $a + $b*$c;

     };
     echo "The Multipication is <br>";
     echo $test(4,5,2);

     ?>
     
</body>
</html>