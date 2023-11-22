<?php
    include_once('./my_strlen.php');

    function my_str_contains (string $string, string $needle) {
        $world = '';
        for ($i = 0; $i < my_strlen($string); $i++) {
            $j = 0;
            $char = $string[$i + $j] ?? null;
            $world = '';
            while($char && $j < my_strlen($needle)) {
                if ($needle[$j] === $char)
                    $world .= $needle[$j];
                $j++;
                $char = $string[$i + $j] ?? null;
            }
            if ($world === $needle)
                return true;
        }
        return false;
    }

    // $string = 'The lazy fox jumped over the fence';

    // echo (int) my_str_contains($string, 'over');
?>