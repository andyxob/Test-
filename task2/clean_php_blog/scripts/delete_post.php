<?php
include('../connection.php');
include ('logs/control.php');
session_start();

$conn = connect();

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "Success";
    mysqli_query($conn, "Delete from `posts` where `id` = '$id'");
    close($conn);
    header('location: ../admin_page.php');
}
Logger::$PATH = dirname('logs');

$logger = Logger::getLogger('logs')->log($_SESSION['username']." deleted a post");

############################## Completed
