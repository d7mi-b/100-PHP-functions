<?php
    include_once('./my_count.php');
    function my_array_slice (array $array, int $offset, int $length = null, bool $preserve_keys = false) {
        $slice_array = array();
        if ($offset > -1) {
            $length = $length ? $offset + $length : my_count($array);
            $index = $offset;
        } else {
            $length = $length ? my_count($array) + $offset + $length : my_count($array);
            $index = my_count($array) + $offset;
        }
        for ($i = $index; $i < $length; $i++) {
            if (!$preserve_keys)
                $slice_array[] = $array[$i];
            else
                $slice_array[$i] = $array[$i];
        }
        return $slice_array;
    }

    // $input = array("a", "b", "c", "d", "e");
    // print_r(my_array_slice($input, 2, 2, true))
?>