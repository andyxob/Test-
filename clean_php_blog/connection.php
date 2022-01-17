<?php

$dbhost = '127.0.0.1';
$dbuser = 'root';
$pass = 'root';
$db = 'blog';

function connect($dbhost = 'localhost', $dbuser = 'root', $pass = '', $db = 'blog'){
    $conn =new mysqli($dbhost, $dbuser, $pass, $db) or die("Connection failed\n".$conn->error);
    return $conn;
}

function close($conn){
    $conn->close();
}

?>