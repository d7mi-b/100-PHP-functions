<?php
    include_once('./my_count.php');
    function my_array_values (array $array) {
        $result = array();
        $index = 0;
        foreach ($array as $value) {
            $result[$index] = $value;
            $index++;
        }
        return $result;
    }

    // $array = array("size" => "XL", "color" => "gold");
    // print_r(my_array_values($array));
?>