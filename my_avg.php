<?php 
    include_once('./my_count.php');

    function my_avg (int | float ...$nums) : int | flote {
        $sum = 0;
        foreach ($nums as $num) {
            $sum += $num;
        }
        return $sum / my_count($nums);
    }
?>