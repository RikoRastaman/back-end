<?php

require_once ('string.inc.php');

header("Content-Type: text/plain; charset = utf-8");

if (isset( $_GET[ "str" ] ) && !empty( $_GET[ "str" ] )) {
    echo "string:" . removeExtraBlanks($_GET[ "str" ]);
} else {
    echo "Pleast enter a string";
}
