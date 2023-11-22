<?php
    include_once("./my_count.php");

    function my_array_combine(array $keys, array $values): array {
        $array = [];
        $length = my_count($keys);
        for ($i = 0; $i < $length; $i++) {
            $array[$keys[$i]] = $values[$i];
        }
        return $array;
    }

    // $a = array('green', 'red', 'yellow');
    // $b = array('avocado', 'apple', 'banana');
    // $c = array_combine($a, $b);

    // echo "<pre>";
    // print_r($c);
    // echo "</pre>";
?>