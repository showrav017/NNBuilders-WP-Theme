<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>">

    <meta name="keywords" content="NN Builders">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Include the bootstrap stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" media="all">

    <!-- Include the Bootstrap responsive utitlities stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/_responsive-utilities.css" rel="stylesheet" media="all">


    <!-- Include the Awesome Font stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Include the bootstrap responsive stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" media="all">

    <!-- Include the bootstrap responsive stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" media="all">

    <!-- Flexslider stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/js/flexslider/flexslider.css" rel="stylesheet" media="all">

    <!-- Pretty Photo stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/js/prettyphoto/prettyPhoto.css" rel="stylesheet" media="all">

    <!-- Pretty Photo stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/js/swipebox/swipebox.css" rel="stylesheet" media="all">

    <!-- Include the site main stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/bxslider-4/dist/jquery.bxslider.min.css">

    <!--End of Zopim Live Chat Script-->
</head>
<body>

<div class="header-wrapper" style="margin-bottom: 25px;">
    <div class="container"><!-- Start Header Container -->
        <header class="clearfix" id="header">
            <div class="clearfix" id="header-top">
                <h2 id="contact-email"><a href="mailto:<?php echo $ThemeOption['title']; ?>"><?php echo $ThemeOption['title']; ?></a></h2>
            </div>
            <!-- Logo -->

            <div id="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="NN Builders-Logo"  >
            </div>

            <nav class="main-menu">
                <div class="menu-main-menu-container">
                    <?php
                    wp_nav_menu( array( 'menu'=>'Header Menu', 'menu_class'=>'clearfix', 'menu_id'=>'menu-main-menu', 'container'=>"ul" ) );
                    ?>
                </div>
            </nav>

            <!-- End Main Menu --><!-- End .menu-and-contact-wrap -->
        </header>
    </div>
    <!-- End Header Container -->
</div>
