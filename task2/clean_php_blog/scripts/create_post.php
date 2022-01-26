<?php

include ('logs/control.php');
session_start();
include('../connection.php');

$title = $_POST['title'];
$description = $_POST['description'];
if(isset($_SESSION['username'])){
    $created_by = $_SESSION['username'];
}else {
    header('location:../forms/sign_in_form.php');
}



$conn = connect();

mysqli_query($conn, "Insert into `posts`(`title`,`description`, `created_by_user`) values ('$title', '$description', '$created_by')");
header('location:../admin_page.php');

Logger::$PATH = dirname('logs');

$logger = Logger::getLogger('logs')->log($_SESSION['username'].' created a post');


########################### Completed
