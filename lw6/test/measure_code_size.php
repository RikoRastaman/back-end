<?php

function fileSizeCount ($dir)
{
	$files = array( 'php' => 0,
					'js' => 0,
					'html.twig' => 0,
					'css' => 0
			);
	
	$scannedDir = scandir($dir);
	if ($scannedDir) {
		$arr = array_slice($scannedDir, 2);
		if (!empty($arr)){
			foreach ($arr as $value) {
				$name = explode('.', $value);
				$type = end($name);
				if($type === 'twig' && prev($name) === 'html') {
					$type = 'html.twig';
				}
				if(array_key_exists($type, $files)) {
				$files[$type] += filesize($dir . $value);
				}
			}
			return $files;
		} else {
			return false;
		}
	} else {
		return false;
	}
	
	
}

function printFileSize ($array)
{
		foreach($array AS $key => $value) {
			echo $key . " - " . round(($value / 1024) , 1) .  PHP_EOL;
		}
}

if($argc != 1) {
	if (is_dir($argv[1])) {
		$files = fileSizeCount ($argv[1]);
		if ($files) {
		printFileSize ($files);
		} else {
			echo "empty directory";
		}
	} else {
		echo "It's not a path";
	}
} else {
	echo "Please enter one argument (path)";
}