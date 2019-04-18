<?php

require_once ('inc/string.inc.php');

header("Content-Type: text/plain; charset = utf-8");

if (isset( $_GET[ "identifier" ] ) && !empty( $_GET[ "identifier" ] )) {
    if(checkIdentifier($_GET[ "identifier" ])) {
        echo "Yes";
    } else {
        echo "No. First symbol can't be a number, identifier must consist of numbers and letters.";
    }
} else {
    echo "Pleast enter a identifier";
}