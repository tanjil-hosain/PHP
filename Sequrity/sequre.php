<?php
$password = "123";
//md5()
echo md5($password);
echo "<br>";

echo hash('SHA512', "admin@"); 

echo "<br>";
echo "<br>";
echo "<br>";


$store="1234";
// echo base64_encode($store);

echo base64_decode("MTIzNA==");



?>