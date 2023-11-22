<?php 
    function my_is_array (mixed $value): bool {
        return (array) $value === $value;
    }

    // $yes = array('this', 'is', 'an array');

    // echo my_is_array($yes) ? 'Array' : 'not an Array';
    // echo "<br>";

    // $no = 'this is a string';

    // echo my_is_array($no) ? 'Array' : 'not an Array';
?>