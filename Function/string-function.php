<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo strlen("Country");
    echo"<br>";
    $info = "This is Faim Ahmed, he is a domestic";
    echo strlen($info);
      echo"<br>";
       echo strtoupper($info);
      echo"<br>";
       echo strtolower($info);
      echo"<br>";
       echo str_replace("Faim","laiccha",$info);
      echo"<br>";

       echo str_word_count($info);
      echo"<br>";

       echo strrev($info);
      echo"<br>";

       echo ucfirst($info);
      echo"<br>";

      

    ?>
</body>
</html>