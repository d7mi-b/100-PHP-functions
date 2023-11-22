<?php
    include_once("./my_strlen.php");

    function my_str_ends_with (string $string, string $needle) {
        $end = '';
        for($i = my_strlen($string) - my_strlen($needle); $i < my_strlen($string); $i++) {
            $end .= $string[$i];
        }
        if ($end === $needle)
            return true;
        return false;
    }

    // echo (int) my_str_ends_with("All strings end with the empty string", 'ing');

    // if (my_str_ends_with("All strings end with the empty string", 'empty')) {
    //     echo "All strings end with the empty string";
    // }
?>