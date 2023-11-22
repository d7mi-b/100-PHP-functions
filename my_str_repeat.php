<?php 
    function my_str_repeat(string $string, int $times) {
        $result = '';
        for ($i = 0; $i < $times; $i++) {
            $result .= $string;
        }
        return $result;
    }

    // echo my_str_repeat("-=", 10);
?>