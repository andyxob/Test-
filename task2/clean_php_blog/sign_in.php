<?php
session_start();

include "connection.php";
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$date = $_POST['date'];
$conn = connect();
$search = mysqli_query($conn,"select * from `users` where `name` = '$name' && password = '$pass'");

if( mysqli_num_rows($search)==1){
    $_SESSION['username'] = $name;
    header('location: home.php');
}
else{
    header('location: register_form.php');
}

if ($_SERVER['REQUEST_METHOD']== 'POST')
{
    $username = $_POST['username'];

}

close($conn);
