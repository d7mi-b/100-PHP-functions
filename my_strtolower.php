<?php
    include_once('./my_strlen.php');
    include_once('./my_array_search.php');

    function my_strtolower ($string) {
        $upper = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $lower = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
        $result = '';
        for ($i = 0; $i < my_strlen($string); $i++) {
            $result[$i] = (my_array_search($string[$i], $upper) || my_array_search($string[$i], $upper) === 0) ? $lower[my_array_search($string[$i], $upper)] : $string[$i];
        }
        return $result;
    }

    // $str = "Mary Had A Little Lamb and She LOVED It So";
    // $str = my_strtolower($str);
    // echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
?>