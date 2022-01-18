<?php

function array_input($elements_count)
{
    $arr = [];
    for ($i = 0; $i < $elements_count; $i++)
    {
        $arr[]  =$i;
    }

    print_r($arr);
}

function factorial ($n){
    return ($n!=1) ? $n* factorial($n-1) : 1;
}

function factorial_start(){
    echo "enter int number: ";

    $n = (int)readline();
    echo factorial($n)."\n";
}

function array_start(){
    echo "Enter count of elements: ";
    $elements_count =(int)readline();
    echo ($elements_count)."\n";

    array_input($elements_count);
}

factorial_start();

array_start();
?>