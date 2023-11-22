<?php 
    include_once('./my_strlen.php');
    include_once('./my_strtoupper.php');

    function my_strripos (string $haystack, string $needle, int $offset = 0): int|false {
        for ($i = $offset; $i < my_strlen($haystack); $i++) {
            for ($j = 0; $j < my_strlen($needle); $j++) {
                if (my_strtoupper($haystack[$i]) === my_strtoupper($needle[$j]))
                    return $i;
            }
        }
        return false;
    }

    // $haystack = 'ababcd';
    // $needle   = 'aB';

    // $pos      = my_strripos($haystack, $needle);

    // if ($pos === false) {
    //     echo "Sorry, we did not find ($needle) in ($haystack)";
    // } else {
    //     echo "Congratulations!\n";
    //     echo "We found the last ($needle) in ($haystack) at position ($pos)";
    // }
?>