<?php

function fileLinesCount ($dir)
{
	$files = array( 'php' => 0,
					'js' => 0,
					'html.twig' => 0,
					'css' => 0
	);
	
	$scannedDir = scandir($dir);
	$arr = array_slice($scannedDir, 2);
	if (!$scannedDir) {
		return false;
	} else if (empty($arr)) {
		return false;
	} else {
		foreach ($arr as $value) {
			$name = explode('.', $value);
			$type = end($name);
			if($type === 'twig' && prev($name) === 'html') {
				$type = 'html.twig';
			}
			if (array_key_exists($type, $files)) {
			$files[$type] += count(file($dir. DIRECTORY_SEPARATOR .$value));
			}
		}
		return $files;
	}
}

function printFileLines ($array)
{
	foreach($array AS $key => $value) {
		echo $key . " - " . $value .  PHP_EOL;
	}
}

if (!($argc == 2)) {
	echo "Please enter one argument (path)";
} else if (!is_dir($argv[1])) {
	echo "It's not a path";
} else {
	$files = fileLinesCount ($argv[1]);
	if (!$files) {
		echo "empty directory";
	} else {
		printFileLines ($files);
	}
}