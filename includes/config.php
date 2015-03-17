<?php
/**
 * The config for the main script. This is a default page to copy in the same directory with the name config.php.
 */
// Error reporting: 6143 for all errors, 0 for no errors
error_reporting ( 6143 );

/*
 * Database config
 */
define ( 'db_hostname', 'localhost' ); // Hostname server mysql
define ( 'db_username', 'root' ); // Username mysql
define ( 'db_password', '' ); // Password mysql
define ( 'db_database', 'develop' ); // Databse to use
                                     
// Name of the tables to use
$config_table = 'pasteshare_table';

// Url root (slash excluded)
$url_root = 'http://localhost/pasteshare';