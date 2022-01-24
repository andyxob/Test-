<?php
include("../connection.php");

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

?>