<?php
    include_once('./my_count.php');
    include_once('./my_in_array.php');

    function my_array_unique (array $array) {
        $result = array();
        $index = 0;
        foreach ($array as $value) {
            if (!my_in_array($value, $result)) {
                $result[$index] = $value;
                $index++;
            }
        }
        return $result;
    }

    // $input = array(4, "4", "3", 4, 3, "3");
    // $result = my_array_unique($input);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // $input = array("a" => "green", "red", "b" => "green", "blue", "red");
    // $result = my_array_unique($input);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>