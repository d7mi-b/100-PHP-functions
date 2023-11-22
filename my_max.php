<?php
    include_once("./my_count.php");

    function my_max (mixed $value, mixed ...$values): mixed {
        $max = $value;
        for ($i = 0; $i < my_count($values); $i++) {
            $current = $values[$i];
            for ($j = 0; $j < my_count($values); $j++) {
                if ($current < $values[$j]) {
                    $current = $values[$j];
                }
            }
            if ($current > $max)
                $max = $current;
        }
        return $max;
    }

    // echo my_max(2, 3, 1, 6, 7);  // 1
?>