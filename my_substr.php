<?php
    include_once('./my_strlen.php');

    function my_substr(string $string, int $offset, ?int $length = null): string {
        $substr = '';
        $length = $length ? $offset + $length : ($offset > -1 ? my_strlen($string) : 0);

        for (
            $i = $offset;
            $i < $length; 
            $i++
        ) {
            $substr .= $string[$i];
        }
        return $substr;
    }

    // $rest = my_substr("abcdef", -1);    // returns "f"
    // echo $rest . '<br>';
    // $rest = my_substr("abcdef", -2);    // returns "ef"
    // echo $rest . '<br>';
    // $rest = my_substr("abcdef", -3, 1); // returns "d"
    // echo $rest . '<br>';
?>