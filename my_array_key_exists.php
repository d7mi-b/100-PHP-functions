<?php
    function my_array_key_exists (string | int $search_key, array $array) {
        foreach($array as $key => $value) {
            if ($search_key === $key)
                return true;
        }
        return false;
    }

    // $search_array = array('first' => null, 'second' => 4);

    // echo "<pre>";
    // // returns true
    // print_r(array_key_exists('first', $search_array));
    // print_r(my_array_key_exists('first', $search_array));
    // echo "</pre>";
?>