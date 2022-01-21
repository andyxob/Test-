<?php
include ('../connection.php');
$conn = connect();
$user = $_POST['user'];

mysqli_query($conn, "Delete from `users` where `name` = '$user'");

close($conn);
header('location: ../admin_page.php');
?>
