<?php
    include_once('./my_sort.php');
    include_once('./my_array_search.php');
    include_once('./my_count.php');

    function my_arsort (array &$array) {
        $sorted = [];
        foreach ($array as $key => $value) {
            $sorted[] = $value;
        }
        my_sort($sorted);
        $result = [];
        for ($i = my_count($sorted) - 1; $i > -1; $i--) {
            $k = my_array_search($sorted[$i], $array);
            $result[$k] = $sorted[$i];
        }
        $array = $result;
    }

    // $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    // my_arsort($fruits);
    // foreach ($fruits as $key => $val) {
    //     echo "$key = $val<br>";
    // }
?>