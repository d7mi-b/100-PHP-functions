<?php
    include_once('./my_count.php');

    function my_array_pop (array &$array) {
        $newArray = array();
        $last_element = $array[my_count($array) - 1];
        for ($i = 0; $i < my_count($array) - 1; $i++) {
            $newArray[$i] = $array[$i]; 
        }

        $array = $newArray;
        return $last_element;
    }

    // $stack = array("orange", "banana", "apple", "raspberry");
    // $fruit = my_array_pop($stack);
    // echo $fruit;
    // print_r($stack);
?>