<?php
    function my_is_numeric (mixed $value): bool {
        if ((int) $value) {
            if (@+$value)
                return true;
            return false;
        }
        return false;
    }

    // $tests = array(
    //     "42",
    //     1337,
    //     0x539,
    //     02471,
    //     0b10100111001,
    //     1337e0,
    //     "0x539",
    //     "02471",
    //     "0b10100111001",
    //     "1337e0",
    //     "not numeric",
    //     array(),
    //     9.1,
    //     null,
    //     '',
    // );
    
    // foreach ($tests as $element) {
    //     if (my_is_numeric($element)) {
    //         echo var_export($element, true) . " is numeric", PHP_EOL . '<br>';
    //     } else {
    //         echo var_export($element, true) . " is NOT numeric", PHP_EOL . '<br>';
    //     }
    // }
?>