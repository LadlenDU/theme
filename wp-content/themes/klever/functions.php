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


function klever_widgets_init()
{
    register_sidebar(array(
        'name' => __('Верхнее изображение 1', 'klever'),
        'id' => 'klever-top-image-1',
        'description' => __('Верхнее изображение 1.', 'klever'),
        'before_widget' => '<span id="%1$s" class="%2$s">',
        'after_widget' => '</span>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Верхнее изображение 2', 'klever'),
        'id' => 'klever-top-image-2',
        'description' => __('Верхнее изображение 2.', 'klever'),
        'before_widget' => '<span id="%1$s" class="%2$s">',
        'after_widget' => '</span>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Левое меню', 'klever'),
        'id' => 'klever-left-menu',
        'description' => __('Левое меню.', 'klever'),
        'before_widget' => '<div id="mws-navigation" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Верхний текст', 'klever'),
        'id' => 'klever-top-caption',
        'description' => __('Верхний текст.', 'klever'),
        'before_widget' => '<div id="klever-top-caption-wrapper" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Подпись к подписке', 'klever'),
        'id' => 'klever-subscribe-caption',
        'description' => __('Подпись к подписке.', 'klever'),
        'before_widget' => '<h4 class="%2$s">',
        'after_widget' => '</h4>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'klever_widgets_init');
