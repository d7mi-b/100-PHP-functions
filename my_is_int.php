<?php
    function my_is_int(int | float $num) {
        if ((int) $num === $num)
            return true;
        return false;
    }

    // echo (int) my_isint(4) . "<br>";
    // echo (int) my_isint(1) . "<br>";
    // echo (int) my_isint(0.5) . "<br>";
?>