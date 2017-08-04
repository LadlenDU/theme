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
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--<link rel="shortcut icon" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */?>/favicon.ico" type="image/x-icon">-->
    <!--<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php /*bloginfo( 'pingback_url' ); */?>">-->

    <!--<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>-->

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/mws-style.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/icol16.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/icol32.css" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/demo.css" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <!--<link rel="stylesheet" type="text/css" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */?>/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */?>/css/jquery-ui.custom.css" media="screen">-->

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/themer.css" media="screen">

    <link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/main.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <!--<a class="skip-link screen-reader-text" href="#content"><?php /*_e( 'Skip to content', 'twentyfifteen' ); */?></a>

    <div id="sidebar" class="sidebar">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <?php
/*                twentyfifteen_the_custom_logo();

                if ( is_front_page() && is_home() ) : */?>
                    <h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></h1>
                <?php /*else : */?>
                    <p class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></p>
                <?php /*endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : */?>
                    <p class="site-description"><?php /*echo $description; */?></p>
                <?php /*endif;
                */?>
                <button class="secondary-toggle"><?php /*_e( 'Menu and widgets', 'twentyfifteen' ); */?></button>
            </div>
        </header>

        <?php /*get_sidebar(); */?>
    </div>--><!-- .sidebar -->


    <div id="mws-header" class="clearfix">

        <!-- Logo Container -->
        <div id="mws-logo-container">

            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo.png" alt="mws admin">
            </div>
        </div>

        <div class="step-taber__head">
            <ul class="step-taber__head__list horizontal">
                <li class="step-taber__head__item active">

                    <!--<span class="number">1 шаг</span>-->
                    <span class="circle"></span>
                    <span class="title">Регистрация на Klever.Today</span>

                </li>
                <li class="step-taber__head__item current">
                    <a href="http://klever.today/panel?id=0">
                        <!--<span class="number">2 шаг</span>-->
                        <span class="circle"></span>
                        <span class="title">Старт</span>
                    </a>
                </li>
                <li class="step-taber__head__item locked">
                    <a href="http://klever.today/panel?id=1#brokers">
                        <!--<span class="number">4 шаг</span>-->
                        <span class="circle"></span>
                        <span class="title">Посмотреть первый урок</span>
                    </a>
                </li>
                <li class="step-taber__head__item locked">
                    <a href="#">
                        <!--<span class="number">5 шаг</span>-->
                        <span class="circle"></span>
                        <span class="title">Получить доступ к основной части</span>
                    </a>
                </li>
                <li class="step-taber__head__item locked">
                    <a href="skype:?chat&amp;blob=jRF_25qlI44vV-mvcNGxG65h76S6ATGJZmxy8ZWMS6h_u7jHSOrEk0eS7NdbXt9LYxxWyZxHV56K9XXuFOo8daOIR6kpP_XhtTOPUGxEsx9t-0z0gAF4lhQdk7eKV6QwGwMXZ-GHGyOdh15qnp2wTR0QY1vAvcxv9EoCTHxl7VBP_eJ2QFLIFQuRrxxirOk7JqdX">
                        <!--<span class="number">3 шаг</span>-->
                        <span class="circle"></span>
                        <span class="title">Получить доступ к сигналам</span>
                    </a>
                </li>
                <li class="step-taber__head__item locked">
                    <a href="skype:?chat&amp;blob=jRF_25qlI44vV-mvcNGxG65h76S6ATGJZmxy8ZWMS6h_u7jHSOrEk0eS7NdbXt9LYxxWyZxHV56K9XXuFOo8daOIR6kpP_XhtTOPUGxEsx9t-0z0gAF4lhQdk7eKV6QwGwMXZ-GHGyOdh15qnp2wTR0QY1vAvcxv9EoCTHxl7VBP_eJ2QFLIFQuRrxxirOk7JqdX">
                        <!--<span class="number">3 шаг</span>-->
                        <span class="circle"></span>
                        <span class="title">Пройти обучение</span>
                    </a>
                </li>
                <li id="end" class="step-taber__head__item">
                    <a href="#">
                        <!--<span class="number">6 шаг</span>-->
                        <span class="circle"></span>
                        <span class="title">+1778$ в месяц = 73% успеха</span>
                    </a>
                </li>

            </ul>
        </div>


        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">

            <!-- User Information and functions section -->
            <div style="visibility:hidden;" id="mws-user-info" class="mws-inset">

                <!-- User Photo -->
                <div id="mws-user" style="width:30px; float:left;">
                </div>

                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                    </div>
                    <div id="cash" style="color:#00A1A5; cursor:pointer;">
                        <!--Ваш баланс: 40$ -->
                    </div>
                    <ul>
                        <li><a href="http://klever.today/panel/profile">Профиль</a></li>
                        <li><a href="http://klever.today/panel/exit">Выход</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>






    <div id="content" class="site-content">
