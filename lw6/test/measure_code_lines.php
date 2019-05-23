<?php

function fileLinesCount ($dir)
{
	$files = array( 'php' => 0,
					'js' => 0,
					'html.twig' => 0,
					'css' => 0
			);
	$arr = array_slice(scandir($dir), 2);
	foreach ($arr as $value) {
		$name = explode('.', $value);
		$type = end($name);
		if($type === 'twig' && prev($name) === 'html') {
			$type = 'html.twig';
		}
		if(array_key_exists($type, $files)) {
		$files[$type] += count(file($dir.$value));
		}
	}
	return $files;
}

function printFileLines ($array)
{
	foreach($array AS $key => $value) {
		echo $key . " - " . $value .  PHP_EOL;
	}
}

if($argc != 1) {
	$files = fileLinesCount ($argv[1]);
	printFileLines ($files);
} else {
	echo "Please enter one argument (path)";
}