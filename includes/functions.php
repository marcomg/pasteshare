<?php
function string_gen($len, $charset = 'abcdefghijklmopqrstuvwxjzABCDEFGHIJKLMOPQRSTUVWXYZ0123456789') {
    $result = NULL;
    $last = strlen ( $charset ) - 1;
    for($i = 1; $i <= $len; $i ++) {
        $result .= $charset [rand ( 0, $last )];
    }
    return $result;
}