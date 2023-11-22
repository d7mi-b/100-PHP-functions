<?php
    function my_strval (mixed $value): string {
        return (string) $value;
    }

    // class StrValTest
    // {
    //     public function __toString()
    //     {
    //         return __CLASS__;
    //     }
    // }

    // // Prints 'StrValTest'
    // echo my_strval(new StrValTest);
?>