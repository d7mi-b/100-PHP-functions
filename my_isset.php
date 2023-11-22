<?php
    function my_isset($variable) {
        if ($variable === null)
            return false;
        return true;
    }

    // $variable = null;

    // echo (int) my_isset($var);
    // echo (int) isset($variable);

    // && ($variable != 0 || $variable !== false || $variable !== '' || $variable !== [])
?>