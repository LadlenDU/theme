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

    <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->

    <?php wp_head(); ?>

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/style.css"
          media="screen">

    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/mws-style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/icol16.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/icol32.css">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/demo.css">

    <!-- jQuery-UI Stylesheet -->
    <!--<link rel="stylesheet" type="text/css" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */ ?>/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php /*echo esc_url( get_stylesheet_directory_uri() ); */ ?>/css/jquery-ui.custom.css" media="screen">-->

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/mws-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/themer.css">

    <link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/main.css" rel="stylesheet">

    <style type="text/css">
        .registration-form input.reg_email {
            background-position: 4% 50%;
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

                <?php // Caption  ?>
                <div class="klever-top-caption widget-area">
                    <?php dynamic_sidebar('klever-top-caption'); ?>
                </div>

                <div class="klever-header-container">
                    <div class="klever-panel widget-area">
                        <?php dynamic_sidebar('klever-top-image-1'); ?>
                    </div>
                    <div class="klever-panel widget-area">
                        <?php dynamic_sidebar('klever-top-image-2'); ?>
                    </div>
                    <div class="klever-panel-last">
                        <div class="registration-form">
                            <form method="post" class="registration-form-form">
                                <div class="head-form">
                                    <h4>ОФОРМИТЬ ПОДПИСКУ</h4>
                                </div>
                                <div class="row">
                                    <input class="reg_email" type="email" name="email" value="" placeholder="Ваш email" required="required">
                                </div>
                                <div class="row row-submit">
                                    <button class="btn submit" type="submit">Подписаться!
                                        <a class="arrow">arrow</a>
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
                                                        $.trim($(this).find('.reg_email').val('');
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

                            <!--<script type="text/javascript">
                                jQuery(function ($) {
                                    $('#switch').click(function () {

                                        $('#switch').hide();
                                        $('#switch2').show();
                                        $('input[name="skype"]').css('background-image', 'url(http://klever.today/public/phone.png)');
                                        $('input[name="skype"]').mask("+" + telCode + " (999) 999-9999");
                                        $('input[name="skype"]').attr("placeholder", "МОЙ НОМЕР ТЕЛЕФОНА").placeholder();


                                    });

                                    $('#switch2').click(function () {

                                        $('#switch2').hide();
                                        $('#switch').show();

                                        $('input[name="skype"]').replaceWith('<input class="text name" type="text" name="skype" value="" placeholder="МОЙ ЛОГИН SKYPE"/>');
                                        $('input[name="skype"]').css('background-image', 'url(http://klever.today/public/skype.png)');
                                        //$('input[name="skype"]').unmask();
                                        $('input[name="skype"]').attr("placeholder", "МОЙ ЛОГИН SKYPE").placeholder();

                                    });
                                });
                            </script>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">

        <!--<div id="mws-sidebar-stitch"></div>-->
        <div id="mws-sidebar-bg"></div>
        <div id="mws-sidebar" class="klever-left-menu widget-area">
            <?php dynamic_sidebar('klever-left-menu'); ?>
        </div>


