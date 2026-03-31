<?php
// $result = fopen("frist.txt", "r") or die("file is not found");
// echo fread($result, filesize("frist.txt"));
// fclose($result);

echo readfile("frist.txt"); // ertar maddome korle charecter size porjonto asbe!

$r = file_get_contents("frist.txt"); // etar maddome file anay jay
echo $r;