<?php


session_start();

echo "admin page"."<br>";

?>
<html>
    <head>
        <style >
            *{
                margin: 0;
                padding: 0;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <a href="scripts/logout.php">Log out</a><br>
        <a href="forms/create_post_form.php">Create post</a><br>
        <a href="forms/delete_post_form.php">Delete post</a><br>
    </body>
</html>

<?php
include ('connection.php');

$conn = connect();

function out_user(){
    $conn = connect();
    $out = mysqli_query($conn, "Select * from  `users`");
    echo "<center><h1>Users</h1>";
    while ($row = mysqli_fetch_object($out)){
        echo $row->name."<a></a>" ."<br>";
        echo $row->email."<br>";
    }
    echo "</center>";
    close($conn);

}

out_user();

function out_posts(){
    $conn = connect();

    $out = mysqli_query($conn, 'Select * from `posts`');
    echo "<center><h1>Posts</h1>";
    while ($row = mysqli_fetch_object($out)){
        echo $row->title."<br>";
        echo $row->description."<br>";
        #echo get_current_user()."<br>";
    }
    echo "</center>";
    close($conn);
}

out_posts();

?>
