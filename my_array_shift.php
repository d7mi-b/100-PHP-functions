<?php
    include_once('./my_count.php');

    function my_array_shift (array &$array) {
        $shifted_array = array();
        $first_element = $array[0];
        for ($i = 1; $i < my_count($array); $i++) {
            $shifted_array[$i - 1] = $array[$i];
        }
        $array = $shifted_array;
    }

    // $stack = array("orange", "banana", "apple", "raspberry");
    // $fruit = my_array_shift($stack);
    // print_r($stack);
?>