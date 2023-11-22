<?php
    function my_floatval (mixed $val) : float {
        return (float) $val;
    }

    // $var = '122.34343The';
    // $float_value_of_var = my_floatval($var);
    // echo $float_value_of_var; // 122.34343

    // $var = 'The122.34343';
    // $float_value_of_var = my_floatval($var);
    // echo $float_value_of_var; // 0
?>