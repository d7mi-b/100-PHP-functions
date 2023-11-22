<?php 
    function my_intval (mixed $value): int {
        return (int) $value;
    }

    // echo intval(42) . '<br>';                      // 42
    // echo intval(4.2) . '<br>';                     // 4
    // echo intval('42') . '<br>';                    // 42
    // echo intval('+42') . '<br>';                   // 42
    // echo intval('-42') . '<br>';                   // -42
    // echo intval(042) . '<br>';                     // 34
    // echo intval('042') . '<br>';                   // 42
    // echo intval(1e10) . '<br>';                    // 10000000000
    // echo intval('1e10') . '<br>';                  // 10000000000
    // echo intval(0x1A) . '<br>';                    // 26
    // echo intval('0x1A') . '<br>';                  // 0
    // echo intval('0x1A', 0) . '<br>';               // 26
    // echo intval(42000000) . '<br>';                // 42000000
    // echo intval(420000000000000000000) . '<br>';   // -4275113695319687168
    // echo intval('420000000000000000000') . '<br>'; // 9223372036854775807
    // echo intval(42, 8) . '<br>';                   // 42
    // echo intval('42', 8) . '<br>';                 // 34
    // echo intval(array()) . '<br>';                 // 0
    // echo intval(array('foo', 'bar')) . '<br>';     // 1
    // echo intval(false) . '<br>';                   // 0
    // echo intval(true) . '<br>';                    // 1
?>