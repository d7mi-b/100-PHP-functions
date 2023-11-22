<?php 
    include_once('./my_strlen.php');

    function my_strpos (string $haystack, string $needle, int $offset = 0): int|false {
        for ($i = $offset; $i < my_strlen($haystack); $i++) {
            for ($j = 0; $j < my_strlen($needle); $j++) {
                if ($haystack[$i] === $needle[$j])
                    return $i;
            }
        }
        return false;
    }

    // $mystring = 'abc';
    // $findme   = 'a';
    // $pos = my_strpos($mystring, $findme);

    // // Note our use of ===.  Simply == would not work as expected
    // // because the position of 'a' was the 0th (first) character.
    // if ($pos === false) {
    //     echo "The string '$findme' was not found in the string '$mystring'";
    // } else {
    //     echo "The string '$findme' was found in the string '$mystring'";
    //     echo " and exists at position $pos";
    // }
?>