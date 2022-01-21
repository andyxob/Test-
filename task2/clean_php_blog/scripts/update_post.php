<?php
include ('../connection.php');
$conn = connect();

$title= "";
$description = "";

if (isset($_GET['edit'])){
    $id = $_GET['id'];
    $result = mysqli_query($conn, "Select * from `posts` where `id` = '$id'");
    if(count($result)==1){
        $row = $result->fetch_array();
        $title = $row['title'];
        $description = $row['description'];

    }
}
?>