<?php
    include_once('./my_str_contains.php');
    
    function my_strstr (string $string, string $needle, bool $before_needle = false) {
        $strtr = '';
        $needle_index = 0;
        for ($i = 0; $i < my_strlen($string); $i++) {
            if ($string[$i] === $needle) {
                $needle_index = $i;
            }
        }
        for ($i = $before_needle ? 0 : $needle_index; $i < ($before_needle ? $needle_index : my_strlen($string)); $i++) {
            $strtr .= $string[$i];
        }
        return $strtr;
    }

    // $email  = 'name@example.com';
    // $domain = my_strstr($email, '@');
    // echo $domain . '<br>'; // prints @example.com

    // $user = my_strstr($email, '@', true);
    // echo $user  . '<br>'; // prints name
?>