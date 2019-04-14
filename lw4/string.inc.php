<?php

function last($str) {
    return mb_substr($str, - 1);
}

function withoutLast($str) {
    return mb_substr($str, 0, mb_strlen($str) - 1);
}

function reverse($string) {
    $len =mb_strlen($string);
    $stringExp = preg_split('//u',$string);
    for ($i = $len ; $i >=0;$i--)
    {
        echo $stringExp[$i];
    }
}