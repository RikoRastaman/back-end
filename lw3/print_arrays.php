<?php

header("Content-Type: text/plain; charset=utf-8");

$primeNumbers = ["2", "3", "5", "7", "11", "13", "17", "19", "23", "29"];
$functionDescription = ["count" => "Подсчитывает количество элементов массива", 
                       "is_array" => "Определяет, является ли переменная массивом", 
                       "array_merge" => "Сливает один или большее количество массивов", 
                       "empty" => "Проверяет, пуста ли переменная", 
                       "print_r" => "Вывод удобочитаемую информацию о переменной"];
$unitMatrix = [[1,0,0]];

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($j == $i) {
			$unitMatrix[$i][$j] = 1;
		}
		else {
			$unitMatrix[$i][$j] = 0;
		}
    }
}

echo "Number of value in primeNumbers: " . count($primeNumbers) . PHP_EOL;

foreach ( $primeNumbers AS $number) {
	echo $number . ' ';
}
echo "\n" . "\n";
echo "Number of value in functionDescription: " . count($functionDescription) . PHP_EOL;
foreach ( $functionDescription AS $function => $discription) {
	echo '"' . $function . '"' . ' => ' . '"' . $discription . '"' . PHP_EOL;
}
echo "\n";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
			echo $unitMatrix[$i][$j] . ' ';
			
    }
	echo PHP_EOL;
}