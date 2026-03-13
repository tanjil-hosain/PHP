<form action="#" method="post">
    Enter Your Marks: 
    <input type="text" name="marks"> <br>
    <input type="submit" name="submit" value="Checking Grade">
</form>
<?php

if(isset($_POST['submit'])){
    $marks = $_POST['marks'];
    if($marks > 100){
        echo "The Mark Is invalid!!!";
    }else 
    if($marks >=80){
        echo "Grade: A+";
    }else if($marks >= 70){
        echo "Garde : A-";
    } else if($marks >= 60){
        echo "Grade: B"; 
    } else if($marks >= 50){
        echo "Grade: C";
    } else if ($marks >= 40){
        echo "Grade: D";
    } else{
        echo "Grade: F";

    }
}
?>