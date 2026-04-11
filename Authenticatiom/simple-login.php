<?php
if(isset($_POST['login'])){
    $user = $_POST["username"];
    $pass = $_POST["pass"];
    if($user == "admin" && $pass == 123){
        echo "Successfully Login";
        header("Location:main.php");

    }else{
        echo "invalid user or password";
    }
}
?>



<form action="" method="post">
    Username: <br>
    <input type="text" name="username"><br>
    Password: <br>
    <input type="password" name="pass"> <br>
    <input type="submit" name="login" value="LOGIN">
</form>