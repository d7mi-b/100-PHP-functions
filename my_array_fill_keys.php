<?php
    function my_array_fill_keys($keys, $value) {
        $array = array();
        foreach($keys as $key) {
            $array[$key] = $value;
        }
        return $array;
    }

    // $keys = array('foo', 5, 10, 'bar');
    // echo "<pre>";
    // print_r(my_array_fill_keys($keys, 'banana'));
    // echo "</pre>";
?>