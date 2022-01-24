<?php
include("../connection.php");

$conn = connect();

$title= "";
$description = "";

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $results = mysqli_query($conn, "Select * from `posts` where `id` = '$id'");
    if(count($results)==1){
        $row = $results->fetch_array();
        $title = $row['title'];
        $description = $row['description'];
    }
echo"edit";
}

close($conn);
header('location : ../admin_page.php');
