<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--<link rel="shortcut icon" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */ ?>/favicon.ico" type="image/x-icon">-->
    <!--<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php /*bloginfo( 'pingback_url' ); */ ?>">-->

    <!--<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>-->

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/style.css"
          media="screen">

    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/mws-style.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/icol16.css"
          media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/icol32.css"
          media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/demo.css"
          media="screen">

    <!-- jQuery-UI Stylesheet -->
    <!--<link rel="stylesheet" type="text/css" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */ ?>/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */ ?>/css/jquery-ui.custom.css" media="screen">-->

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/themer.css"
          media="screen">

    <link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/main.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <!--<a class="skip-link screen-reader-text" href="#content"><?php /*_e( 'Skip to content', 'twentysixteen' ); */ ?></a>

    <div id="sidebar" class="sidebar">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <?php
    /*                twentysixteen_the_custom_logo();

                    if ( is_front_page() && is_home() ) : */ ?>
                    <h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */ ?>" rel="home"><?php /*bloginfo( 'name' ); */ ?></a></h1>
                <?php /*else : */ ?>
                    <p class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */ ?>" rel="home"><?php /*bloginfo( 'name' ); */ ?></a></p>
                <?php /*endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : */ ?>
                    <p class="site-description"><?php /*echo $description; */ ?></p>
                <?php /*endif;
                */ ?>
                <button class="secondary-toggle"><?php /*_e( 'Menu and widgets', 'twentysixteen' ); */ ?></button>
            </div>
        </header>

        <?php /*get_sidebar(); */ ?>
    </div>--><!-- .sidebar -->


    <header id="masthead" class="site-header" role="banner">
        <div class="site-header-main">

            <div id="mws-header" class="clearfix">

                <?php // Menu  ?>
                <div class="klever-top-menu">
                    <?php if (has_nav_menu('primary') || has_nav_menu('social')) : ?>
                        <button id="menu-toggle" class="menu-toggle"><?php _e('Menu', 'twentysixteen'); ?></button>

                        <div id="site-header-menu" class="site-header-menu">
                            <?php if (has_nav_menu('primary')) : ?>
                                <nav id="site-navigation" class="main-navigation" role="navigation"
                                     aria-label="<?php esc_attr_e('Primary Menu', 'twentysixteen'); ?>">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'menu_class' => 'primary-menu',
                                    ));
                                    ?>
                                </nav><!-- .main-navigation -->
                            <?php endif; ?>

                            <?php if (has_nav_menu('social')) : ?>
                                <nav id="social-navigation" class="social-navigation" role="navigation"
                                     aria-label="<?php esc_attr_e('Social Links Menu', 'twentysixteen'); ?>">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'social',
                                        'menu_class' => 'social-links-menu',
                                        'depth' => 1,
                                        'link_before' => '<span class="screen-reader-text">',
                                        'link_after' => '</span>',
                                    ));
                                    ?>
                                </nav><!-- .social-navigation -->
                            <?php endif; ?>
                        </div><!-- .site-header-menu -->
                    <?php endif; ?>
                </div>

                <div class="klever-header-container">
                    <div class="klever-panel widget-area">
                        <?php dynamic_sidebar('klever-top-image-1'); ?>
                    </div>
                    <div class="klever-panel widget-area">
                        <?php dynamic_sidebar('klever-top-image-2'); ?>
                    </div>
                    <div class="klever-panel-last"></div>
                </div>
            </div>

        </div>
    </header>

    <div id="content" class="site-content">
