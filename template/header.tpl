<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>pasteshare</title>
        <!-- FAVICON -->
        
        <link rel="icon" href="<?php echo($url_root); ?>/webroot/images/favicon.ico" />

        <!-- STYLES
            ================================================== -->
        <link href="<?php echo($url_root); ?>/webroot/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }

        </style>
        <link href="<?php echo($url_root); ?>/webroot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        <!-- JAVASCRIPTS
            ================================================== -->
        <script src="<?php echo($url_root); ?>/webroot/js/jquery.js"></script>
        <script src="<?php echo($url_root); ?>webroot/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- NAVBAR
            ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- Brand -->
                    <a class="brand" href="<?php echo($url_root); ?>">pasteshare</a>
                    
                    <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="share"><!--<i class="icon-share icon-white"></i> -->Share</a><!-- aggiungere  icon-white?? -->
                    </ul>
                </div>
            </div>
        </div>
