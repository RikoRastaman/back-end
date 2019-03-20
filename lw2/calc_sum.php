<?php
    
    $arg1 = $_GET["arg1"]??"";
    $arg2 = $_GET["arg2"]??"";
    
    if (is_numeric($arg1) && is_numeric($arg2))
    {
        $sum = $arg1 + $arg2;
        echo $sum;
    }
    else 
    {
        echo"Please enter two numbers as arguments: 'arg1', 'arg2'";
    }