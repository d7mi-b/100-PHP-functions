<?php
    include_once('./my_str_contains.php');
    include_once('./my_strtoupper.php');
    
    function my_stristr (string $string, string $needle, bool $before_needle = false) {
        $strtr = '';
        $needle_index = 0;
        for ($i = 0; $i < my_strlen($string); $i++) {
            if (my_strtoupper($string[$i]) === my_strtoupper($needle)) {
                $needle_index = $i;
                break;
            }
        }
        for ($i = $before_needle ? 0 : $needle_index; $i < ($before_needle ? $needle_index : my_strlen($string)); $i++) {
            $strtr .= $string[$i];
        }
        return $strtr;
    }

    // $email = 'USER@EXAMPLE.com';
    // echo my_stristr($email, 'e'); // outputs ER@EXAMPLE.com
    // echo my_stristr($email, 'e', true); // outputs US
?>