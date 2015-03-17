<?php
$db = new MYSQL ();

$query = $db->query ( "SELECT * FROM `$config_table` WHERE `cid` = '" . $db->escape_string ( $_COOKIE ['cid'] ) . "'" );
$result = $db->fetch_array ( $query );
if (empty ( $result )) {
    setcookie ( "cid", "$cid", 15, '/' );
    header ( "Location: $url_root" );
} else {
    $cid = $result ['cid'];
    $text = $result ['text'];
}

$url = $url_root . '/edit/cookie/?cookie=' . $cid;

include (ROOT . '/includes/phpqrcode.php');

ob_start ();
QRCode::png ( $url );
$image64 = base64_encode ( ob_get_contents () );
ob_end_clean ();
header ( 'Content-Type: text/html; charset=utf-8' );
include (ROOT . '/template/share.tpl');
