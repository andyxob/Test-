<?php
include ('../connection.php');
session_start();

$conn = connect();

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "Success";
    mysqli_query($conn, "Delete from `users` where `id` = '$id'");
    close($conn);
    header('location: ../admin_page.php');
}



################################## Completed
?>
