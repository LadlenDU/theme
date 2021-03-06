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

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/style.css?ver=1.1"
          media="screen">

    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/mws-style.min.css?ver=1.1">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/icol16.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/icol32.css">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/demo.css">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/mws-theme.css?ver=1.1">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/themer.css">

    <link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/main.css?ver=1.1" rel="stylesheet">

    <style type="text/css">
        .registration-form input.reg_email {
            background-position: 9px 50%;
            background-repeat: no-repeat;
            background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/envelope.png);
        }

        .registration-form .arrow {
            position: absolute;
            right: 0px;
            top: 0px;
            width: 44px;
            height: 43px;
            background: transparent url(<?php bloginfo('stylesheet_directory') ?>/img/bg-btn.png) no-repeat scroll 0% 0%;
            z-index: 10;
            font-size: 0px;
            line-height: 0;
            box-sizing: border-box;
        }
    </style>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="site-header-main">

            <div id="mws-header" class="clearfix"><!--

                <?php // Menu  ?>
                --><div class="tradebin-top-menu">
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
                </div><!--

                <?php // Caption  ?>
                --><div class="tradebin-top-caption widget-area">
                    <?php dynamic_sidebar('tradebin-top-caption'); ?>
                </div><!--

                --><div class="tradebin-header-container"><!--
                    --><div class="tradebin-panel widget-area">
                        <?php dynamic_sidebar('tradebin-top-image-1'); ?>
                    </div><!--
                    --><div class="tradebin-panel widget-area">
                        <?php dynamic_sidebar('tradebin-top-image-2'); ?>
                    </div><!--
                    --><div class="tradebin-panel-last">
                        <div class="registration-form">
                            <form method="post" class="registration-form-form">
                                <div class="head-form widget-area">
                                    <!--<h4>ОФОРМИТЬ ПОДПИСКУ</h4>-->
                                    <?php dynamic_sidebar('tradebin-subscribe-caption'); ?>
                                </div>
                                <div class="row">
                                    <input class="reg_email" type="email" name="email" value="" placeholder="Ваш email"
                                           required="required">
                                </div>
                                <div class="row row-submit">
                                    <button class="btn submit" type="submit">Подписаться!
                                        <span class="arrow">arrow</span>
                                    </button>
                                </div>
                            </form>

                            <script>
                                jQuery(function ($) {
                                    $('.registration-form .submit').hover(function () {
                                        $(".registration-form .arrow").css('background', 'url(<?php bloginfo('stylesheet_directory') ?>/img/bg-btn.png) no-repeat scroll 0% 100%');
                                    });
                                    $('.registration-form .submit').mouseout(function () {
                                        $(".registration-form .arrow").css('background', 'url(<?php bloginfo('stylesheet_directory') ?>/img/bg-btn.png) no-repeat scroll 0% 0%');
                                    });

                                    function validateEmail(email) {
                                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                        return re.test(email);
                                    }

                                    $(".registration-form-form").submit(function (e) {
                                        e.preventDefault();
                                        var email = $.trim($(this).find('.reg_email').val());
                                        $(this).find('.reg_email').val(email);
                                        if (!email) {
                                            alert('Пожалуйста введите значение email');
                                            return false;
                                        }

                                        if (!validateEmail(email)) {
                                            alert('Пожалуйста введите правильное значение email');
                                            return false;
                                        }

                                        $.post('<?php bloginfo('stylesheet_directory') ?>/ajax.php',
                                            {email: email},
                                            function (data) {
                                                if (data && data.status) {
                                                    if (data.status == 'success') {
                                                        alert("Вы успешно подписаны!");
                                                        $('.registration-form-form .reg_email').val('');
                                                    } else {
                                                        alert(data.msg);
                                                    }
                                                } else {
                                                    alert("Произошла ошибка! Пожалуйста, повторите попытку позже.");
                                                }
                                            }
                                        ).fail(function () {
                                            alert("Произошла ошибка! Пожалуйста, повторите попытку позже.");
                                        });

                                        return false;
                                    });

                                });
                            </script>
                        </div>
                    </div><!--
                --></div><div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="true" aria-controls="navbar" title="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!--

                --><script>
                    jQuery(function ($) {
                        $(".navbar-header .navbar-toggle").click(function () {
                            $(".left-sidebar").fadeToggle();
                            //$(".left-sidebar").toggleClass('hidden');
                            /*$(".left-sidebar").toggle(function () {
                                    $(this).animate({width: 0});
                                },
                                function () {
                                    $(this).animate({width: 200});
                                });*/
                        });
                    });
                </script><!--

            --></div>
        </div>
    </header>

    <div id="content" class="site-content">

        <div class="left-sidebar">
            <!--<div id="mws-sidebar-stitch"></div>-->
            <div id="mws-sidebar-bg"></div>
            <div id="mws-sidebar" class="tradebin-left-menu widget-area">
                <?php dynamic_sidebar('tradebin-left-menu'); ?>
            </div>
        </div>


