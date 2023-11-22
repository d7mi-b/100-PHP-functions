<?php
    include_once('./my_strtoupper.php');

    function my_strcasecmp (string $string1, string $string2): int {
        $string1 = my_strtoupper($string1);
        $string2 = my_strtoupper($string2);
        if ($string1 === $string2)
            return 0;
        elseif ($string1 > $string2)
            return 1;
        else
            return -1;
    }

    // $var1 = "Hello";
    // $var2 = "hello";
    // echo my_strcasecmp($var1, $var2) . '<br>';
    // if (my_strcasecmp($var1, $var2) == 0) {
    //     echo '$var1 is equal to $var2 in a case-insensitive string comparison';
    // }
?>