<?php
/**
 * Plugin Name: Подписка email Tradebinary
 * Description: Оформляет подписку email, открывает ссылку в новом окне.
 * Version: 1.0
 */

function shortcode_tb_subscribe($atts = [])
{
    ob_start();
    require_once 'template.php';
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

add_shortcode('tb_subscribe', 'shortcode_tb_subscribe');
