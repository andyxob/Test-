<?php
    echo "Enter your name: ";
    $name  = readline();
    $format = "Hello %s";
    echo sprintf($format,  $name);
?>