<?php
    include_once('./my_explode.php');

    function my_str_getcsv (string $string, string $separator = ",") : array {
        return my_explode($separator, $string);
    }

    $string = 'PHP,Java,Python,Kotlin,Swift';
    $data = str_getcsv($string);

    echo '<pre>';
    print_r($data);
    echo '</pre>';
?>