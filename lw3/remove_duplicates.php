<?php

header ('Content-Type: text/plain;charset=UTF-8');

if ($argc == 2) {
	$string = preg_split('//u', $argv[1]); 
	$result = array_unique($string);
	echo implode($result);
} else {
	echo "Incorrect number of arguments! " . PHP_EOL . "Usage php remove_duplicates.php <input string>";
}