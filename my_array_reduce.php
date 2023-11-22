<?php
    include_once('./my_count.php');

    function my_array_reduce (array $array, callable $callback) {
        $result = 0;
        for ($i = 0; $i < my_count($array); $i++) {
            $result = $callback($result, $array[$i]);
        }
        return $result;
    }

    // function sum($carry, $item) {
    //     $carry += $item;
    //     return $carry;
    // }

    // function product($carry, $item) {
    //     $carry *= $item;
    //     return $carry;
    // }

    // $a = array(1, 2, 3, 4, 5);
    // $x = array();

    // var_dump(my_array_reduce($a, "sum")); // int(15)
?>