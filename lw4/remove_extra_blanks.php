<?php
header("Content-Type: text/plain; charset = utf-8");

$str = $_GET["str"];

$arr = explode(' ', $str);
$arr = array_diff($arr, ['']);

$str = implode(' ', $arr);
echo $str;