<?php
    include_once('./my_sort.php');
    include_once('./my_array_search.php');

    function my_asort (array &$array) {
        $sorted = [];
        foreach ($array as $key => $value) {
            $sorted[] = $value;
        }
        my_sort($sorted);
        $result = [];
        foreach ($sorted as $value) {
            $k = my_array_search($value, $array);
            $result[$k] = $value;
        }
        $array = $result;
    }

    // $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    // my_asort($fruits);
    // // foreach ($fruits as $key => $val) {
    // //     echo "$key = $val<br>";
    // // }
    // echo "<pre>";
    // print_r($fruits);
    // echo "</pre>";
?>