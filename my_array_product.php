<?php
    function my_array_product ($array) {
        $product = 1;
        foreach ($array as $num) {
            $product *= $num;
        }
        return $product;
    }

    // echo my_array_product(array(2, 4, 6, 8));
?>