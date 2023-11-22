<?php
    include_once('./my_count.php');

    function my_array_is_list (array $array) {
        if ($array === [])
            return true;
        $index = 0;
        foreach ($array as $key => $value) {
            if ($index !== $key)
                return false;
            $index++;
        }
        return true;
    }

    // echo (int) my_array_is_list([]); // true
    // echo (int) my_array_is_list(['apple', 2, 3]); // true
    // echo (int) my_array_is_list([0 => 'apple', 'orange']); // true

    // // The array does not start at 0
    // echo (int) my_array_is_list([1 => 'apple', 'orange']); // false

    // // The keys are not in the correct order
    // echo (int) my_array_is_list([1 => 'apple', 0 => 'orange']); // false

    // // Non-integer keys
    // echo (int) my_array_is_list([0 => 'apple', 'foo' => 'bar']); // false

    // // Non-consecutive keys
    // echo (int) my_array_is_list([0 => 'apple', 2 => 'bar']); // false
?>