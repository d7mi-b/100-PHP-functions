<?php 
    include_once('./my_strlen.php');
    include_once('./my_strtoupper.php');

    function my_stripos (string $haystack, string $needle, int $offset = 0): int|false {
        for ($i = $offset; $i < my_strlen($haystack); $i++) {
            for ($j = 0; $j < my_strlen($needle); $j++) {
                if (my_strtoupper($haystack[$i]) === my_strtoupper($needle[$j]))
                    return $i;
            }
        }
        return false;
    }

    $findme    = 'a';
    $mystring1 = 'xyz';
    $mystring2 = 'ABC';

    $pos1 = my_stripos($mystring1, $findme);
    $pos2 = my_stripos($mystring2, $findme);

    // Nope, 'a' is certainly not in 'xyz'
    if ($pos1 === false) {
        echo "The string '$findme' was not found in the string '$mystring1'";
    }

    // Note our use of ===.  Simply == would not work as expected
    // because the position of 'a' is the 0th (first) character.
    if ($pos2 !== false) {
        echo "We found '$findme' in '$mystring2' at position $pos2";
    }
?>