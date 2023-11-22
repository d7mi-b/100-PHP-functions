<?php
    include_once('./my_substr.php');
    include_once('./my_strlen.php');

    function my_substr_compare  (
        string $string,
        string $needle,
        int $offset,
        ?int $length = null
    ) {
        $substr = '';
        $length = $length ? $offset + $length : ($offset > -1 ? my_strlen($string) : 0);
        for (
            $i = $offset;
            $i < $length; 
            $i++
        ) {
            $substr .= $string[$i];
        }

        echo $needle . ' ' . $substr . "<br>";

        if ($needle[0] === $substr[0] && my_strlen($needle) === my_strlen($substr)) {
            return 0;
        } elseif ($needle[0] === $substr[0] && my_strlen($needle) < my_strlen($substr)) {
            return 1;
        } elseif ($needle[0] === $substr[0] && my_strlen($needle) > my_strlen($substr)) {
            return 0;
        } else {
            return -1;
        }
    }

    // echo my_substr_compare("abcde", "bc", 1, 2) . '<br>'; // 0
    // echo my_substr_compare("abcde", "de", -2, 2) . '<br>'; // 0
    // echo my_substr_compare("abcde", "bcg", 1, 2) . '<br>'; // 0
    // echo my_substr_compare("abcde", "BC", 1, 2, true) . '<br>'; // 0
    // echo my_substr_compare("abcde", "bc", 1, 3) . '<br>'; // 1
    // echo my_substr_compare("abcde", "cd", 1, 2) . '<br>'; // -1
    // // echo my_substr_compare("abcde", "abc", 5, 1) . '<br>'; // warning
?>