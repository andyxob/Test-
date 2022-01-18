<?php
session_start();
header('location: register_form.php');
include "connection.php";
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$date = $_POST['date'];
    $conn = connect();
    $search = mysqli_query($conn,"select * from `users` where `name` = '$name'");

if( mysqli_num_rows($search)==1){
    echo "Take other username";
}
else{
    $register =  mysqli_query($conn," insert into `users` (`name`, `email`, `password`, `date`) values('$name', '$email', '$pass', '$date')");
    echo "registration successful";
}
close($conn);
