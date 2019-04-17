<?php

require_once ('string.inc.php');

header("Content-Type: text/plain; charset = utf-8");

if (isset( $_GET[ "identifier" ] ) && !empty( $_GET[ "identifier" ] )) {
    if(checkIdentifier($_GET[ "identifier" ])) {
        echo "Yes";
    } else {
        echo "No";
    }
} else {
    echo "Pleast enter a identifier";
}