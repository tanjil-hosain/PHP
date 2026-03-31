<?php
$result = fopen("frist.txt", "r") or die("file is not found");
echo fread($result, filesize("frist.txt"));
fclose($result);