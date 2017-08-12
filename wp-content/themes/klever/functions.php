<?php

/*class TopLogoWidget extends WP_Widget
{

    function __construct()
    {
        // Instantiate the parent object
        parent::__construct(false, 'My New Widget Title');
    }

    function widget($args, $instance)
    {
        // Widget output
    }

    function update($new_instance, $old_instance)
    {
        // Save widget options
    }

    function form($instance)
    {
        // Output admin widget options form
    }
}

function myplugin_register_widgets()
{
    register_widget('TopLogoWidget');
}

add_action('widgets_init', 'myplugin_register_widgets');*/


function tradebin_widgets_init()
{
    register_sidebar(array(
        'name' => __('Верхнее изображение 1', 'tradebin'),
        'id' => 'tradebin-top-image-1',
        'description' => __('Верхнее изображение 1.', 'tradebin'),
        'before_widget' => '<span id="%1$s" class="%2$s">',
        'after_widget' => '</span>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Верхнее изображение 2', 'tradebin'),
        'id' => 'tradebin-top-image-2',
        'description' => __('Верхнее изображение 2.', 'tradebin'),
        'before_widget' => '<span id="%1$s" class="%2$s">',
        'after_widget' => '</span>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Левое меню', 'tradebin'),
        'id' => 'tradebin-left-menu',
        'description' => __('Левое меню.', 'tradebin'),
        'before_widget' => '<div id="mws-navigation" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Верхний текст', 'tradebin'),
        'id' => 'tradebin-top-caption',
        'description' => __('Верхний текст.', 'tradebin'),
        'before_widget' => '<div id="tradebin-top-caption-wrapper" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Подпись к подписке', 'tradebin'),
        'id' => 'tradebin-subscribe-caption',
        'description' => __('Подпись к подписке.', 'tradebin'),
        'before_widget' => '<h4 class="%2$s">',
        'after_widget' => '</h4>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'tradebin_widgets_init');
