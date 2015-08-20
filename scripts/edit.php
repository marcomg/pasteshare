<?php
$query = $db->query ( "SELECT * FROM `$config_table` WHERE `cid` = '" . $db->escape_string ( $_COOKIE ['cid'] ) . "'" );
$result = $db->fetch_array ( $query );
if (empty ( $result )) {
    setcookie ( "cid", "", 0, '/' );
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
        if ($ok) {
            $db->query ( "UPDATE `$config_table` SET `text` = '$text', `timestamp` = '$time' WHERE `cid` = '$cid'" );
            setcookie ( "cid", $cid, time () + 31536000, '/' );
        }
        header ( "Location: $url_root" );
        break;
    
    case 'cookie' :
        if (! empty ( $q [2] )) {
            setcookie ( "cid", $q [2], time () + 31536000, '/' );
        }
        header ( "Location: $url_root" );
        break;
    
    case 'cookiedelete' :
        setcookie ( "cid", "", 0, '/' );
        header ( "Location: $url_root" );
        break;
    
    case 'delete' :
        if ($ok) {
            $db->query ( "DELETE FROM `$config_table` WHERE `cid` = '$cid'" );
            setcookie ( "cid", "", 0, '/' );
            header ( "Location: $url_root" );
        }
        break;
    
    default :
        header ( "Location: $url_root" );
        break;
}