<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $test= fn($a,$b)=> $a+$b;
     echo "The Addition Is=";
     echo $test(100,5);
     ?>
     <br>
     

      <?php
     $test= fn($a,$b)=> $a<$b;
     echo "The Compariosn Is=";
     var_dump($test(100,5)) ;
     ?>
     
</body>
</html>