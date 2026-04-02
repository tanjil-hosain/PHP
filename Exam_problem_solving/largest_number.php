<form action="#" method="post">
    Frist Number: <br>
    <input type="text" name="fn"> <br> <br>
    Secound Number: <br>
    <input type="text" name="sn"> <br> <br>
    Third Number: <br>
    <input type="text" name="tn"> <br> <br>
    <input type="submit" name="submit" value="Check maximum number">
</form>
<?php
if(isset($_POST['submit'])){
    $a = $_POST['fn'];
    $b = $_POST['sn'];
    $c = $_POST['tn'];

    if ( $a >= $b && $a >= $c ){
        echo "The Largest Number: ". $a;
    } else if ( $b >= $a && $b >= $c){
        echo "The Largest Number: " . $b;
    } else{
        echo "The Largest Number: ". $c;
    }
}
?>