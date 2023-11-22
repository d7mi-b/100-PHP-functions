<?php
    require_once('./my_count.php');

    function my_array_count_values ($array) {
        $newArray = array();

        for ($i = 0; $i < my_count($array); $i++) {
            $counter = 0;
            for ($j = 0; $j < my_count($array); $j++) {
                if ($array[$i] === $array[$j]) {
                    $counter++;
                }
            }
            $newArray[$array[$i]] = $counter;
        }

        return $newArray;
    }

    // $arr = array(1, 2, 5, 1, 7, 2, 1, 1, 7);

    // echo "<pre>";
    // print_r(my_array_count_values($arr));
    // echo "</pre>";
?>