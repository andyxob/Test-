<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:sign_in_form.php');
}
else{
    if ($_SESSION['is_admin'] ==0){
        echo "this is common user";
    }
    else{
        echo "this is admin";
    }
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
