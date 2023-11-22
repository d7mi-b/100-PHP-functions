<?php 
    function my_abs(int|float $num): int|float {
        return $num < 0 ? -$num : $num;
    }

    // var_dump(my_abs(-4.2));
    // var_dump(my_abs(5));
    // var_dump(my_abs(-5));
    // var_dump(my_abs(0));
?>