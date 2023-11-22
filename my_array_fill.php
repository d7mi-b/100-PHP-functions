<?php
    function my_array_fill(int $start_index, int $num, $value) {
        $array = array();
        for ($i = 0; $i < $num; $i++) {
            $array[$start_index] = $value;
            $start_index++;
        }

        return $array;
    }

    // echo "<pre>";
    // print_r(my_array_fill(5, 6, 'banana'));
    // echo "</pre>";
?>