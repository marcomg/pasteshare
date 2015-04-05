<?php
/**
 * Do everything we need to do periodically
 */
if ($enable_cron) {
    $last_cron = file_get_contents ( ROOT . '/includes/cron_db.txt' );
    if (time () - $last_cron > 300) {
        // Remove empty pastes older than 1 hour
        $db->query ( "DELETE FROM `$config_table` WHERE (`text` = '') AND ((" . time () . " - `timestamp`) > 3600)" );
        
        // Remove not-empty pastes not edited since 3 month
        $db->query ( "DELETE FROM `$config_table` WHERE (" . time () . " - `timestamp`) > 7776000" );
        
        file_put_contents ( ROOT . '/includes/cron_db.txt', time () );
    }
}