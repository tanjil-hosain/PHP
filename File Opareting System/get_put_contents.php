<?php
$write = file_put_contents("check.txt", "hello\n", FILE_APPEND);
echo"succeccfullt";
$result = file_get_contents("check.txt");


$read = fopen("check.txt", "r");
echo fread($read, filesize("check.txt"));