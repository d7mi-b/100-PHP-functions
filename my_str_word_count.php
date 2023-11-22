<?php 
    include_once("./my_strlen.php");

    function my_str_word_count (string $string) {
        $counter = 0;

        for ($i = 1; $i < my_strlen($string); $i++) {
            if ($string[$i] === " ") {
                if ($string[$i - 1] === " ")
                    continue;
                $counter++;
            }
            else if ($i === my_strlen($string) - 1)
                $counter++;
        }

        return $counter;
    }
?>