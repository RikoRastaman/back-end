<?php
    header("Content-Type: text/plain; charset = utf-8");
    if (isset($_GET["name"]))
    {
        echo "Hello, Dear ".$_GET["name"]."!";
    }
    else
    {
        echo "Please enter an argument 'name'.";
    }