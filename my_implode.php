<?php
    include_once('./my_strlen.php');

    function my_implode(array $pieces, string $separator = '') {
        $string = '';
        foreach($pieces as $piece) {
            $string .= $piece . $separator;
        }
        return $string;
    }

    // $array = ['lastname', 'email', 'phone'];
    // var_dump(implode( ",", $array)); // string(20) "lastname,email,phone"
    // echo '<br>';

    // // Empty string when using an empty array:
    // var_dump(implode('hello', [])); // string(0) ""
    // echo '<br>';

    // // The separator is optional:
    // var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
    // echo '<br>';

    // $array = ['lastname', 'email', 'phone'];
    // var_dump(my_implode($array, ",")); // string(20) "lastname,email,phone"
    // echo '<br>';

    // // Empty string when using an empty array:
    // var_dump(my_implode([], 'hello')); // string(0) ""
    // echo '<br>';

    // // The separator is optional:
    // var_dump(my_implode(['a', 'b', 'c'])); // string(3) "abc"
    // echo '<br>';
?>