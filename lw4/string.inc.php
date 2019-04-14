<?php

function last($str) {
    return mb_substr($str, - 1);
}

function withoutLast($str) {
    return mb_substr($str, 0, mb_strlen($str) - 1);
}

function reverse($string) {
    $len =mb_strlen($string);
    $stringExp = mb_split($string);
    for ($i = $len - 1; $i >=0;$i--)
    {
        echo $stringExp[$i];
    }
}