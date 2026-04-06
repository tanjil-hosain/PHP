<?php
$data = "ak2345";
$p = "/^{a-zA-Z0-9]{3,8}$/";
echo preg_match_all($p, $data);