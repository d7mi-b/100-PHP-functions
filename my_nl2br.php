<?php 
    include_once("./my_strlen.php");

    function my_nl2br (string $string, bool $use_xhtml = true): string {
        $nl2br = '';
        for ($i = 0; $i < my_strlen($string); $i++) {
            if (
                $string[$i] == '\\' || 
                ($string[$i] == '\\' && $string[$i + 1] == 'r') || 
                ($string[$i] == '\\' && $string[$i + 1] == 'n') ||
                ($string[$i] == 'n' && $string[$i - 1] == '\\') ||
                ($string[$i] == 'r' && $string[$i - 1] == '\\')
            ) {
                $nl2br .= "<br>";
                continue;
            }
            $nl2br .= $string[$i];
        }
        echo $nl2br . '<br>';
        return $nl2br;
    }

    // echo my_nl2br("foo isn't\n bar") . '<br>';
?>