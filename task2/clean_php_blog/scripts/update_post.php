<?php
include("../connection.php");
include ("logs/control.php");
session_start();
$conn = connect();
$id = 0;
$title= "";
$description = "";

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $results = mysqli_query($conn,"Select * from  `posts` where `id` = '$id'");
    $row = mysqli_fetch_array($results);
    $title = $row['title'];
    $description = $row['description'];

}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $result = mysqli_query($conn, "update posts set title='$title', description='$description' where  id = '$id'");

    header('location: ../admin_page.php');
}
close($conn);

Logger::$PATH = dirname('logs');
$name = date('D M d H:i:s Y', time());

$logger = Logger::getLogger('logs')->log( $_SESSION['username'].' edited a post');