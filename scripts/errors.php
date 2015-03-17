<?php
switch ($q [1]) {
    case '404' :
        header ( "Status: 404 Not Found" );
        include (ROOT . '/template/error_404.tpl');
        break;
    
    default :
        header ( "Location: $url_root" );
        break;
}