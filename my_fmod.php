<?php
    function my_fmod(float $num1, float $num2): float {
        $result = $num1 / $num2;
        return  $num1 - $num2 * (int) $result;
    }

    // $x = 5.7;
    // $y = 1.3;
    // $r = my_fmod($x, $y);
    // echo $r;
    // // $r equals 0.5, because 4 * 1.3 + 0.5 = 5.7
?>