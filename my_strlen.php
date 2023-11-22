<?php
    include_once('./my_isset.php');
    function my_strlen (string $string) {
        $index = 0;
        $element = $string[$index] ?? null;

        while ($element !== null) {
            $index++;
            $element = $string[$index] ?? null;
        }
        return $index;
    }

    

    // echo my_strlen("aaiia");
?>