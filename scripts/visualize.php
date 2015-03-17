<?php
$db = new MYSQL ();

if (empty ( $_COOKIE ['cid'] )) {
    // Get free cid
    $while = true;
    while ( $while ) {
        $cid = string_gen ( 64 );
        $result = $db->query ( "SELECT * FROM `$config_table` WHERE `cid` = '$cid'" );
        $result = $db->fetch_array ( $result );
        if (empty ( $result ['cid'] )) {
            $while = false;
        }
    }
    
    $time = time ();
    $db->query ( "INSERT INTO `$config_table` (`cid`, `timestamp`, `text`) VALUES ('$cid', '$time', '');" );
    setcookie ( "cid", "$cid", time () + 3600, '/' );
    header ( "Location: $url_root" );
} else {
    $query = $db->query ( "SELECT * FROM `$config_table` WHERE `cid` = '" . $db->escape_string ( $_COOKIE ['cid'] ) . "'" );
    $result = $db->fetch_array ( $query );
    if (empty ( $result )) {
        setcookie ( "cid", "$cid", 15, '/' );
        header ( "Location: $url_root" );
    } else {
        $cid = $result ['cid'];
        $text = $result ['text'];
        include (ROOT . '/template/visualize.tpl');
    }
}