<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:sign_in_form.php');
}
?>

<html>
<head>
<title>Home page</title>
</head>
<body>
<a href="logout.php">Log out</a>
<h1>welcome <?php echo $_SESSION['username']?> </h1>
</body>
</html>
