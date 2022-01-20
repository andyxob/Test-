<?php

include('../connection.php');
session_start();
$title = $_POST['title'];
$description = $_POST['description'];
$created_by = $_SESSION['username'];


$conn = connect();

mysqli_query($conn, "Insert into `posts`(`title`,`description`, `created_by_user`) values ('$title', '$description', '$created_by')");

header('location:../admin_page.php');