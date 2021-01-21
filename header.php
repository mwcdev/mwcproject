<!DOCTYPE HTML>
<html lang="mm">
    <head>
        <title><?php echo stripslashes('Home'); ?> - <?php echo SITE_NAME; ?></title>
        <link rel="icon" href="http://thesoftwareguy.in/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo stripslashes('Data'); ?>" />
        <meta name="keywords" content="<?php echo stripslashes('Data'); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        
        <!-- Swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <!-- Owl -->
        <link rel="stylesheet" href="<?php echo PJ_VENDORS_URI; ?>/slick/slick-theme.css">
        <link rel="stylesheet" href="<?php echo PJ_VENDORS_URI; ?>/slick/slick.css">
        

        <!-- stylesheet -->
        <link href='<?php echo PJ_ASSETS_URI; ?>/css/reset.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo PJ_ASSETS_URI; ?>/css/style.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo PJ_ASSETS_URI; ?>/css/mega-site-navigation-master.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo PJ_ASSETS_URI; ?>/font/icofont.min.css' rel='stylesheet' type='text/css'>

    </head>
    <body>


    <header class="mwc-main-header">
        <div class="container">
            <div class="d-flex align-items-center">
            <nav class="mwc-nav ">
                    <ul id="mwc-primary-nav" class="mwc-primary-nav m-0 is-fixed">

                        <li class="has-children">
                            <a href="#">Services</a>
                            <ul class="mwc-nav-icons is-hidden">
                                <li class="go-back"><a href="#0">Menu</a></li>
                                <!-- <li class="see-all"><a href="#">Browse Services</a></li> -->
                                <li>
                                    <a class="mwc-nav-item item-1" href="#">
                                        <h3 class="f-base">Branding</h3>
                                        <p class="f-small">Logo ဝန်ဆောင်မှု</p>
                                    </a>
                                </li>

                                <li>
                                    <a class="mwc-nav-item item-2" href="#">
                                        <h3 class="f-base">Web Design</h3>
                                        <p class="f-small">Web Design & Development ဝန်ဆောင်မှု</p>
                                    </a>
                                </li>

                                <li>
                                    <a class="mwc-nav-item item-3" href="#">
                                        <h3 class="f-base">Digital Marketing</h3>
                                        <p class="f-small">This is the item description</p>
                                    </a>
                                </li>

                                <li>
                                    <a class="mwc-nav-item item-4" href="#">
                                        <h3  class="f-base">Application Development</h3>
                                        <p class="f-small">This is the item description</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">About</a></li>
                    </ul> <!-- primary-nav -->
                </nav> <!-- mwc-nav -->
                <a class="mwc-logo d-inline-block py-2" href="#0">
                    <img src="<?php echo PJ_ASSETS_URI; ?>/img/logo.png" alt="Logo">
                </a>
                <ul class="mwc-header-buttons d-flex align-items-center ml-auto mb-0">
                    <li class="d-md-inline-block d-none">
                        <a href="http://" class="text-default">09 26346 2227</a>
                    </li>
                    <li class="d-md-inline-block d-none">
                        <a href="http://" role="button" class="btn btn-outline-primary ml-3">BOOK CONSULTATION!</a>
                    </li>
                    <!-- <li><a class="mwc-search-trigger" href="#mwc-search">Search<span></span></a></li> -->
                    <li><a class="mwc-nav-trigger" href="#mwc-primary-nav">Menu<span></span></a></li>
                </ul> <!-- mwc-header-buttons -->
            </div>
        </div>
    </header>
    

    <div id="mwc-search" class="mwc-search">
        <form>
            <input type="search" placeholder="Search...">
        </form>
    </div>