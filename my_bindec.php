<?php 
    include_once('./my_strlen.php');
    include_once("./my_pow.php");

    function my_bindec(string $binary_string): int|float {
        $dec = 0;
        $pow = my_strlen($binary_string) - 1;
        for ($i = 0; $i < my_strlen($binary_string); $i++) {
            $dec += +$binary_string[$i] * (2 ** $pow);
            $pow--;
        }
        return $dec;
    }

    // echo my_bindec('110011') . "<br>";
    // echo my_bindec('1010') . "<br>";

    // echo my_bindec('000110011') . "<br>";

    // echo my_bindec('111');
?>