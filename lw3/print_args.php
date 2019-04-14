<?php

header('Content-Type: text/plain;charset=UTF-8');

if ($argc < 2) {
    echo 'No parameters were specified!';
} else {
    echo 'Number of arguments: ' . ($argc - 1) . "\n";
    echo 'Arguments: ';
    for ($argument = 1; $argument < $argc; $argument++) {
        echo $argv[$argument] . ' ';
    }
}