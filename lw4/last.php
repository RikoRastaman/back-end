<?php

require_once ('inc/string.inc.php');

header("Content-Type: text/plain; charset = utf-8");

if (isset( $_GET[ "str" ] ) && !empty( $_GET[ "str" ] )) {

    echo "Last character: " . last($_GET[ "str" ]);
} else {
    echo "Pleast enter a string";
}