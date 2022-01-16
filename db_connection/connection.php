<?php
    function connect(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "php_test";

        $conn = new mysqli($dbhost,  $dbuser, $dbpass, $db) or die("Connection failed %s\n".$conn->error);
        echo "connection opened\n";

        return $conn;

    }

    function create($a,$b,$c){
        $conn = connect();
        mysqli_query($conn, "insert into `abc` (`a`,`b`,`c`) values ('$a','$b','$c')");
        close($conn);
    }


    function close($conn){
        $conn ->close();
        echo "Connection closed\n";
    }




#$conn = connect();
echo "connected ";

    #create('sdfsldfsl', 'slkdfsdf', 'sddkjdfhgdkhfgd');
?>