<?php
include "connection.php";
    function add($a, $b, $c){


       $conn = connect();
        mysqli_query($conn, "Insert into `abc` (`a`,`b`,`c`) values ('$a', '$b', '$c')");
        echo "Data added\n";

        close($conn);
    }


    function out(){
        $conn = connect();
        $out  = mysqli_query($conn,  "Select * from `abc`");
        close($conn);
        return $out;
    }

$a =  $_POST['a'];
$b =  $_POST['b'];
$c =  $_POST['c'];

add($a, $b, $c);

$output = out();

for ($i = 0; $i < var_dump($a); $i++){
    echo $output[$i]."\n";
}

?>