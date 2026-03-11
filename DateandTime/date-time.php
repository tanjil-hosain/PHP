<?php

echo time();   // 1773201098
echo "<br>";

echo date("d");  // 11
echo "<br>";

echo date("D"); // Wed
echo "<br>";

echo date("m");  // 03
echo "<br>";


echo date("M"); // Mar
echo "<br>";

echo date("Y"); //2026
echo "<br>";

echo date("y"); //26
echo "<br>";

echo date("n");  //3 this is month numuric
echo "<br>";

echo date("L");   //leep year
echo "<br>";

echo date("F");  // full month name 
echo "<br>";


echo date("d/m/y");  //full date
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
 echo date("r");
    echo "<br>";
    echo date("a");
    echo "<br>";
    echo date("A");
    echo "<br>";
    echo date_default_timezone_get()."<br>".date("h");
    echo "<br>";
    echo date_default_timezone_get();
    echo "<br>";
    echo date_default_timezone_set("Asia/Dhaka");
    echo "<br>";
    echo date_default_timezone_get(). "today" . date("h");
    echo "<br>";
        echo "<br>";
            echo "<br>";
                echo "<br>";
    $date_f= date_create("2-12-2002");    
    $date_l = date_create("11-03-2026");
    echo "<br>";
    $diff = date_diff($date_f, $date_l);
    echo $diff->days;
    echo "<br>";
    echo $diff->m;
    echo "<br>";
    echo $diff->y;
    echo "<br>";
   
    



    ?>



    
    


