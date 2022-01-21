<?php
include('../connection.php');
$conn = connect();

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "Delete from `posts` where `id` = '$id'");
    close($conn);
    header('location: ../admin_page.php');
}

?>