<?php
echo "update user";
include_once ("../connection.php");

$conn = connect();
$id = 0;
$name = "";
$email = "";
$password = "";
$date = "";


if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $results = mysqli_query($conn,"Select * from  `users` where `id` = '$id'");
    $row = mysqli_fetch_array($results);
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $date = $row['date'];

}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = $_POST['date'];

    $result = mysqli_query($conn, "update users set name='$name', email='$email', password = '$password', date = '$date', where  id = '$id'");

    header('location: ../admin_page.php');
}
close($conn);

?>