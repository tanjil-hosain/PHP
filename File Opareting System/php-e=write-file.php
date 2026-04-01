<?php

//write
$r = fopen("check.txt", "w");
$ur = "this is new file";
fwrite($r, $ur);


//read
$read = fopen("check.txt", "r");
echo fread($read, filesize("check.txt"));