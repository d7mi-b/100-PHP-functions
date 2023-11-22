<?php
    include_once('./my_count.php');

    function my_array_map ($callback, array $array) {
        $result = array();
        for ($i = 0; $i < my_count($array); $i++) {
            $result[$i] = $callback($array[$i]);
        }
        return $result;
    }

    // function cube($n) {
    //     return ($n * $n * $n);
    // }

    // $a = [1, 2, 3, 4, 5];
    // $b = my_array_map('cube', $a);
    // print_r($b);
?>