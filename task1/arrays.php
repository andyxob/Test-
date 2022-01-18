<?php
    $arr = array();

    echo "enter count of elements: ";
    $elements_count = (int)readline();
    for ($i = 0; $i < $elements_count; $i++)
    {
        $arr[]  =$i;
    }
    print_r($arr);

    $deleted =  array_pop($arr);
    print_r($arr);

    $deleted = array_shift($arr);
    print_r($arr);

?>