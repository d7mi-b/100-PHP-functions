<?php 
    include_once('./my_count.php');

    function my_array_chunk (array $array , int $size) : array {
        $arrays = array();
        $index = 0;
        for ($i = 0; $i < my_count($array); $i += (my_count($array) / $size)) {
            for ($j = $i; $j < my_count($array); $j++) {
                $arrays[$index][] = $array[$j];
                if (my_count($arrays[$index]) > (my_count($array) / $size))
                    break;
            }
            $index++;
        }
        return $arrays;
    }

    $array = [10, 5, 4, 7, 1, 78, 1, 0, 9];
    echo "<pre>";
    print_r(my_array_chunk($array, 3));
    echo "</pre>";
?>