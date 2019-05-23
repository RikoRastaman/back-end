<?php

function fileSizeCount ($dir)
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
			if(array_key_exists($type, $files)) {
			$files[$type] += filesize($dir . DIRECTORY_SEPARATOR . $value);
			}
		}
		return $files;
	}
}

function printFileSize ($array)
{
	foreach ($array AS $key => $value) {
		echo $key . " - " . round($value , 1) . " KB" . PHP_EOL;
	}
}

function bytesToKilobytes ($value)
{
	if ($value!= 0) {
	return $value / 1024;
	} else {
		return $value;
	}
}

if (!($argc == 2)) {
	echo "Please enter one argument (path)";
} else if (!is_dir($argv[1])) {
	echo "It's not a path";
} else {
	$files = fileSizeCount ($argv[1]);
	if (!$files) {
		echo "empty directory";
	} else {
		$files = array_map('bytesToKilobytes', $files);
		printFileSize ($files);
	}
}