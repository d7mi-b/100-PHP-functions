<?php
    function my_array_search ($needle, array $array, bool $strict = false) {
        foreach ($array as $key => $value) {
            if ($strict && $needle === $value)
                return $key;
            elseif (!$strict && $needle == $value)
                return $key;
        }
        return false;
    }

    // $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

    // $key = my_array_search("a", array('a', 'b')); // $key = 2;
    // echo "key:" . $key . '<br>';

    // $key = (int) my_array_search('red', $array);   // $key = 1;
    // echo $key . '<br>';
?>