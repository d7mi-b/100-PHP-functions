<?php 
    function my_boolval (mixed $value): bool {
        return (bool) $value;
    }

    // echo '0:        '.(my_boolval(0) ? 'true' : 'false')."<br>";
    // echo '42:       '.(my_boolval(42) ? 'true' : 'false')."<br>";
    // echo '0.0:      '.(my_boolval(0.0) ? 'true' : 'false')."<br>";
    // echo '4.2:      '.(my_boolval(4.2) ? 'true' : 'false')."<br>";
    // echo '"":       '.(my_boolval("") ? 'true' : 'false')."<br>";
    // echo '"string": '.(my_boolval("string") ? 'true' : 'false')."<br>";
    // echo '"0":      '.(my_boolval("0") ? 'true' : 'false')."<br>";
    // echo '"1":      '.(my_boolval("1") ? 'true' : 'false')."<br>";
    // echo '[1, 2]:   '.(my_boolval([1, 2]) ? 'true' : 'false')."<br>";
    // echo '[]:       '.(my_boolval([]) ? 'true' : 'false')."<br>";
    // echo 'stdClass: '.(my_boolval(new stdClass) ? 'true' : 'false')."<br>";
?>