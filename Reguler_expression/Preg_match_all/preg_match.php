<?php
$str = "this is reguler Expression";
$pattern = "/i/";
echo preg_match($pattern, $str);
echo "<br>";
echo preg_match_all($pattern, $str);