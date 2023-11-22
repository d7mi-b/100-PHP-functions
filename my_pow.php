<?php
    function my_pow(mixed $num, mixed $exponent): int|float|object {
        if ($exponent === 0) 
            return 1;
        
        $result = $num;
        for ($i = 1; $i < $exponent; $i++) {
            $num *= $result;
        }
        return $num;
    }

    // var_dump(my_pow(2, 8)); // int(256)
    // echo "<br>";
    // echo my_pow(-1, 20); // 1
    // echo "<br>";
    // echo my_pow(0, 0); // 1
    // echo "<br>";
    // echo my_pow(10, -1); // 0.1
    // echo "<br>";
    // echo my_pow(-1, 5.5); // NAN
?>