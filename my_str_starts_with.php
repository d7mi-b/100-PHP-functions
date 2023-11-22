<?php
    include_once('./my_strlen.php');

    function my_str_starts_with (string $string, string $needle) {
        $start = '';
        for($i = 0; $i < my_strlen($needle); $i++) {
            $start .= $string[$i];
        }
        if ($start === $needle)
            return true;
        return false;
    }

    // $string = 'The lazy fox jumped over the fence';

    // if (my_str_starts_with($string, 'The')) {
    //     echo "The string starts with 'The'\n";
    // }

    // if (my_str_starts_with($string, 'the')) {
    //     echo 'The string starts with "the"';
    // } else {
    //     echo '"the" was not found because the case does not match';
    // }
?>