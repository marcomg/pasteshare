<?php
function string_gen($long_string_gen) {
    $string_gen = NULL;
    for($i = 1; $i <= $long_string_gen; $i ++) {
        if ($i % 2) {
            $string_gen = $string_gen . chr ( rand ( 97, 122 ) );
        } else {
            $string_gen = $string_gen . rand ( 0, 9 );
        }
    }
    return $string_gen;
}