<?php


$filename = 'text.txt';
function write($filename){

    $abc = $_POST['enter'];
    echo  "Enter something ";
    file_put_contents($filename, $abc);

    echo "You wrote ($abc) into ($filename)\n";
}

function read($filename){

    $read_text = file_get_contents($filename);

    echo "You read ($read_text) from ($filename)\n";

}

write($filename);

read($filename);
