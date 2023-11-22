<?php
    include_once('./my_strlen.php');

    function my_strspn (string $string, string $characters, int $offset = 0, ?int $length = null): int {
        $count = 0;
        $exist = false;
        $length = $length !== null ? $length : my_strlen($string);
        if ($length < 0) {
            for ($i = $offset; $i > -my_strlen($string); $i--) {
                for ($j = 0; $j < my_strlen($characters); $j++) {
                    if ($string[$i] === $characters[$j]) {
                        $exist = true;
                    }
                }
                $count++;
            }
            return $count;
        }
        if ($string[$offset] === $characters[0]) {
            $count++;
            for ($i = $offset + 1; $i <= $length; $i++) {
                for ($j = 0; $j < my_strlen($characters); $j++) {
                    if ($string[$i] === $characters[$j]) {
                        $exist = true;
                    }
                }
                if ($exist)
                    $count++;
                $exist = false;
            }
        }
        return $count;
    }

    // // subject does not start with any characters from mask
    // var_dump(my_strspn("foo", "o"));

    // // examine two characters from subject starting at offset 1
    // var_dump(my_strspn("foo", "o", 1, 2));

    // // examine one character from subject starting at offset 1
    // var_dump(my_strspn("foo", "o", 1, 1));
?>