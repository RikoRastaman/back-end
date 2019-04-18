<?php
    
$arg1 = $_GET["arg1"] ?? "";
$arg2 = $_GET["arg2"] ?? "";
$operation = $_GET["operation"] ?? "";
$result = NULL;

function calc($arg1, $arg2, $operation)
{
	if($operation == "add") {
		return $arg1 + $arg2;
	} else if($operation == "sub") {
		return $arg1 - $arg2;
	} else if($operation == "mul") {
		return $arg1 * $arg2;
	} else if($operation == "div") {
		return $arg1 / $arg2;
	}
}

if(is_numeric($arg1) && is_numeric($arg2) && $operation != "") {
	if ($arg2 == 0) {
		echo "Devide by zero";
	}
	echo calc( $arg1, $arg2, $operation);
} else {
	echo "Please enter two numbers as arguments: 'arg1', 'arg2' and 'operation'";
}