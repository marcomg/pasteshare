<?php
/**
 * Do everything pasteshare needs to load.
 */

/*
 * Load every dipendences
 */
require (ROOT . '/includes/config.php');
require (ROOT . '/includes/functions.php');
require (ROOT . '/includes/mysql.class.php');

/*
 * Load needed script (if don't exist load error script)
 */
if (! isset ( $_GET ['q'] ) or empty ( $_GET ['q'] ))
    include (ROOT . '/scripts/visualize.php');
else {
    $q = explode ( '/', $_GET ['q'] );
    
    if (file_exists ( ROOT . '/scripts/' . $q [0] . '.php' ))
        include (ROOT . '/scripts/' . $q [0] . '.php');
    else {
        $q [1] = 404;
        include (ROOT . '/scripts/errors.php');
    }
}