<?php 
    include_once('./my_count.php');

    function my_array_pad (array $array, int $length, mixed $value): array {
        if ($length <= my_count($array))
            return $array;
        for ($i = 0; $i < $length; $i++) {
            if ($i >= my_count($array)) {
                for ($j = 0; $j < my_count($value); $j++) {
                    $array[$i] = $value[$j];
                    if ($length <= my_count($array)) {
                        break;
                    }
                }
            }
        }
        return $array;
    }

    // $input = array(12, 10, 9);

    // $result = array_pad($input, 5, 0);
    // // result is array(12, 10, 9, 0, 0)
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // $result = array_pad($input, -7, -1);
    // // result is array(-1, -1, -1, -1, 12, 10, 9)
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // $result = array_pad($input, 2, "noop");
    // // not padded
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>