<?php 
    include_once('./my_strlen.php');

    function my_strncmp (string $string1, string $string2, int $length): int {
        $str1 = '';
        $str2 = '';
        for ($i = 0; $i < $length; $i++) {
            $str1 .= $string1[$i];
        }
        for ($i = 0; $i < $length; $i++) {
            $str2 .= $string2[$i];
        }
        if ($str1 === $str2)
            return 0;
        elseif ($str1 > $str2)
            return 1;
        else
            return -1;
    }

    // $var1 = 'Hello John';
    // $var2 = 'Hello Doe';
    // if (my_strncmp($var1, $var2, 5) === 0) {
    //     echo 'First 5 characters of $var1 and $var2 are equals in a case-sensitive string comparison';
    // }
?>