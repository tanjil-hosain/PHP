<?php
$a= 10;
try{
    if($a < 30){
        throw new Exception("valid Number");
    } else{
        throw new Exception("invalid Number");
    }
}catch(Exception $e){
    echo "Your error is: ". $e->getMessage() . "<br>";
}finally{
    echo"this is finally done my work";
}

?>