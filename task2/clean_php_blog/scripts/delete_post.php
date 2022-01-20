<?php
include('connection.php');
$conn = connect();
$title = $_POST['title'];
mysqli_query($conn, "Delete from `posts` where `title` = '$title'");

close($conn);
header('location: ../admin_page.php');

?>