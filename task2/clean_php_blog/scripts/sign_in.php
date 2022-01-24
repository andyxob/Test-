<?php
session_start();

include "../connection.php";
$name = $_POST['name'];
$pass = $_POST['pass'];

$conn = connect();
$search = mysqli_query($conn,"select * from `users` where `name` = '$name' && password = '$pass'");

if( mysqli_num_rows($search)==1){
    $row = mysqli_fetch_array($search);
    $_SESSION['username'] = $name;
    if($row['is_admin'] === "1"){
        header('location: ../admin_page.php');
    }
    else{
        header('location: ../home.php');
    }

}
else{
    header('location: ../forms/register_form.php');
}



close($conn);


############################ Completed
