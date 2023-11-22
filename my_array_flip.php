<?php 
    include_once('./my_count.php');
    include_once('./my_array_keys.php');
    include_once('./my_array_values.php');
    include_once('./my_array_combine.php');

    function my_array_flip(array $array): array {
        $kyes = my_array_keys($array);
        $values = my_array_values($array);
        return my_array_combine($values, $kyes);
    }

    // $input = array("oranges", "apples", "pears");
    // $flipped = my_array_flip($input);

    // echo '<pre>';
    // print_r($flipped);
    // echo "</pre>";
?>