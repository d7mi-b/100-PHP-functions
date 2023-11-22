<?php
    include_once("./my_count.php");

    function my_min(mixed $value, mixed ...$values): mixed {
        $min = $value;
        for ($i = 0; $i < my_count($values); $i++) {
            $current = $values[$i];
            for ($j = 0; $j < my_count($values); $j++) {
                if ($current > $values[$j]) {
                    $current = $values[$j];
                }
            }
            if ($current < $min)
                $min = $current;
        }
        return $min;
    }

    // echo my_min(2, 3, 1, 6, 7);  // 1
?>