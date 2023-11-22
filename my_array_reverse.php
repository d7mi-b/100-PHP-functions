<?php
    include_once('./my_count.php');

    function my_array_reverse (array $array) {
        $reverseArray = array();
        $index = 0;
        for ($i = my_count($array) - 1; $i > -1; $i--) {
            $reverseArray[$index] = $array[$i];
            $index++;
        }
        return $reverseArray;
    }

    // $input  = array("php", 4.0, array("green", "red"));
    // $reversed = my_array_reverse($input);

    // print_r($input);
    // print_r($reversed);
?>