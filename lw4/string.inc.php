<?php

function last($str) {
    return mb_substr($str, - 1);
}

function withoutLast($str) {
    return mb_substr($str, 0, mb_strlen($str) - 1);
}

function reverse($string) {
    $len = mb_strlen($string);
    $stringExp = preg_split('//u', $string);
    for ($i = $len ; $i >=0; $i--) {
        echo $stringExp[$i];
    }
}

function removeExtraBlanks($str) {
    $str = $_GET["str"];

    $arr = explode(' ', $str);
    $arr = array_diff($arr, ['']);

    $str = implode(' ', $arr);
    return $str;
}