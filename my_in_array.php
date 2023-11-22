<?php
    function my_in_array($needle, array $array, bool $strict = false) {
        foreach ($array as $key => $value) {
            if (($strict && $needle === $value) || (!$strict && $needle == $value))
                return true;
        }
        return false;
    }

    // $a = array(array('p', 'h'), array('p', 'r'), 'o');

    // if (my_in_array(array('p', 'h'), $a)) {
    //     echo "'ph' was found\n";
    // }

    // if (my_in_array(array('f', 'i'), $a)) {
    //     echo "'fi' was found\n";
    // }

    // if (my_in_array('o', $a)) {
    //     echo "'o' was found\n";
    // }
?>