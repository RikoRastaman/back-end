<?php
    header("Content-Type: text/plain; charset = utf-8");
    $queryString = $_SERVER["QUERY_STRING"];
    echo "Query string = '" . $queryString . "'";