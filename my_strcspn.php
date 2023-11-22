<?php
    include_once('./my_strlen.php');

    function my_strcspn (string $string, string $characters, int $offset = 0, ?int $length = null): int {
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
        for ($i = $offset; $i < my_strlen($string); $i++) {
            for ($j = 0; $j < my_strlen($characters); $j++) {
                if ($string[$i] === $characters[$j]) {
                    $exist = true;
                }
            }
            if ($exist)
                return $count;
            $count++;
        }
        return $count;
    }

    // $a = my_strcspn('abcd',  'apple');
    // $b = my_strcspn('abcd',  'banana');
    // $c = my_strcspn('hello', 'l');
    // $d = my_strcspn('hello', 'world');
    // $e = my_strcspn('abcdhelloabcd', 'abcd', -9);
    // $f = my_strcspn('abcdhelloabcd', 'abcd', -9, -5);

    // var_dump($a);
    // echo '<br>';
    // var_dump($b);
    // echo '<br>';
    // var_dump($c);
    // echo '<br>';
    // var_dump($d);
    // echo '<br>';
    // var_dump($e);
    // echo '<br>';
    // var_dump($f);
?>