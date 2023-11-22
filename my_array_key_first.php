<?php
    function my_array_key_first(array $array) {
        foreach($array as $key => $value) {
            return $key;
        }
    }

    // $array = ['a' => 1, 'b' => 2, 'c' => 3];

    // echo "<pre>";
    // print_r(my_array_key_first($array));
    // echo "</pre>";
?>