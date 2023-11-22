<?php
    include_once('./my_strlen.php');

    function my_str_split (string $string, int $length = 1) {
        $result = array();
        $index = 0;
        for ($i = 0; $i < my_strlen($string); $i += $length) {
            $result[$index] = '';
            for ($j = $i; $j < $i + $length; $j++) {
                $result[$index] .= $string[$j];
            }
            $index++;
        }
        return $result;
    }

    // $str = "Hello Friend";

    // $arr1 = my_str_split($str);
    // $arr2 = my_str_split($str, 3);

    // echo "<pre>";
    // print_r($arr1);
    // echo "</pre>";

    // echo "<pre>";
    // print_r($arr2);
    // echo "</pre>";
?>