<?php 
    include_once('./my_strlen.php');

    function my_stripcslashes (string $string) : string {
        $stripcslashes = '';
        for ($i = 0; $i < my_strlen($string); $i++) {
            if (
                $string[$i] == '\\' || 
                ($string[$i] == '\\' && $string[$i + 1] == 'r') || 
                ($string[$i] == '\\' && $string[$i + 1] == 'n') ||
                ($string[$i] == 'n' && $string[$i - 1] == '\\') ||
                ($string[$i] == 'r' && $string[$i - 1] == '\\')
            )
                continue;
            $stripcslashes .= $string[$i];
        }
        return $stripcslashes;
    }

    echo my_stripcslashes('I\'d have a coffee.\nNot a problem.');
?>