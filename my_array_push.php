<?php
    include_once('./my_count.php');

    function my_array_push (array &$array, ...$values) {
        $index = my_count($array);
        foreach ($values as $value) {
            $array[$index] = $value;
            $index++;
        }
    }

    // $stack = array("orange", "banana");
    // my_array_push($stack, "apple", "raspberry");
    // print_r($stack);
?>