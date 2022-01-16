<?php



function connect($dbhost = "pr355810.mysql.tools",$user = "pr355810_andrii",
                 $password = "52Y3ne~aH-", $db = "pr355810_andrii"){


    $conn = new mysqli($dbhost,  $user, $password, $db) or die("Connection failed %s\n".$conn->error);
    echo "connection opened\n";

    return $conn;
}

function close($conn){
    $conn->close();
    echo "connection closed";
}

    $conn = connect();

    close($conn);
?>