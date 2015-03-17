<?php
$db = new MYSQL ();

$query = $db->query ( "SELECT * FROM `$config_table` WHERE `cid` = '" . $db->escape_string ( $_COOKIE ['cid'] ) . "'" );
$result = $db->fetch_array ( $query );
if (empty ( $result )) {
    setcookie ( "cid", "$cid", 15, '/' );
    $ok = false;
} else {
    $cid = $result ['cid'];
    $text = $result ['text'];
    $ok = true;
}

switch ($q [1]) {
    case 'update' :
        $text = $db->escape_string ( $_POST ['text'] );
        $time = time ();
        if ($ok)
            $db->query ( "UPDATE `$config_table` SET `text` = '$text', `timestamp` = '$time' WHERE `cid` = '$cid'" );
        header ( "Location: $url_root" );
        break;
    
    case 'cookie' :
        if (! empty ( $_GET ['cookie'] )) {
            setcookie ( "cid", $_GET ['cookie'], time () + 3600, '/' );
        }
        header ( "Location: $url_root" );
        break;
    
    default :
        header ( "Location: $url_root" );
        break;
}