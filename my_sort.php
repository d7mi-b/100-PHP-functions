<?php 
    include_once('./my_count.php');
    function my_sort (array &$array) {
        for ($i = 0; $i < my_count($array); $i++) {
            for ($j = $i + 1; $j < my_count($array); $j++) {
                if ($array[$j] < $array[$i]) {
                    $tmp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $tmp;
                }
            }
        }
    }

    // $fruits = array("lemon", "orange", "banana", "apple");
    // my_sort($fruits);
    // foreach ($fruits as $key => $val) {
    //     echo "fruits[" . $key . "] = " . $val . "<br>";
    // }

    // $fruits = array(
    //     "Orange1", "orange2", "Orange3", "orange20"
    // );
    // sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
    // foreach ($fruits as $key => $val) {
    //     echo "fruits[" . $key . "] = " . $val . "<br>";
    // }
?>