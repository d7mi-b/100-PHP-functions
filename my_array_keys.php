<?php
    function my_array_keys (array $array, $search_key = null) {
        $newArray = array();
        $index = 0;
        if (!$search_key) {
            foreach ($array as $key => $value) {
                $newArray[$index] = $key;
                $index++;
            }
        } else {
            foreach ($array as $key => $value) {
                if ($value == $search_key) {
                    $newArray[$index] = $key;
                    $index++;
                }
            }
        }
        return $newArray;
    }

    // $array = array(0 => 100, "color" => "red");
    // print_r(my_array_keys($array));

    // $array = array("blue", "red", "green", "blue", "blue");
    // print_r(my_array_keys($array, "blue"));

    // $array = array("color" => array("blue", "red", "green"),
    //             "size"  => array("small", "medium", "large"));
    // print_r(my_array_keys($array));
?>