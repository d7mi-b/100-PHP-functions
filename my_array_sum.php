<?php
    function my_array_sum ($array) {
        $sum = 0;
        foreach ($array as $num) {
            $sum += $num;
        }
        return $sum;
    }

    // echo my_array_sum(array("a" => 1.2, "b" => 2.3, "c" => 3.4));
?>