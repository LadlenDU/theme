<?php
/**
 * Plugin Name: Email рассылка Tradebinary
 * Description: Рассылает email по заданным в файле адресам
 * Version: 1.0
 */

add_action('admin_menu', 'plugin_admin_add_email_news_page');
function plugin_admin_add_email_news_page()
{
    add_options_page('Настройки почтовой рассылки', 'Почтовая рассылка Tradebinary', 'manage_options', 'email_newsletter_tradebinary', 'plugin_options_page');
}

function plugin_options_page()
{
    ?>
    <div class="wrap">
        <!--<h2>Расчет цены окон</h2>-->

        <form action="options.php" method="post">
            <?php settings_fields('plugin_options_email_news'); ?>
            <?php do_settings_sections('email_newsletter_tradebinary'); ?>

            <input name="Submit" type="submit" value="<?php esc_attr_e('Сохранить изменения'); ?>"/>
        </form>
    </div>

    <?php
}

$defaultOptions = [
    'email' => ['from' => 'sp@binlab.su'],
];

//delete_option('plugin_options_email_news');

// add the admin settings and such
add_action('admin_init', 'plugin_admin_init');
function plugin_admin_init()
{
    register_setting('plugin_options_email_news', 'plugin_options_email_news', 'plugin_options_validate_email_news');
    add_settings_section('plugin_main_email_news', 'Настройки', 'plugin_section_text_email_news', 'email_newsletter_tradebinary');

    add_settings_field('plugin_email_news_from', 'Почта "От"', 'plugin_email_news_from_func', 'email_newsletter_tradebinary', 'plugin_main_email_news');
    add_settings_field('plugin_email_news_theme', 'Тема', 'plugin_email_news_theme_func', 'email_newsletter_tradebinary', 'plugin_main_email_news');
    //add_settings_field('plugin_email_news_furniture', 'Сообщение', 'plugin_email_news_furniture_func', 'email_newsletter_tradebinary', 'plugin_main_email_news');

    #wp_enqueue_script('jquery');

    #wp_enqueue_style('email_news_admin_style', plugins_url('', __FILE__) . '/admin.css');
    #wp_enqueue_script('email_news_admin_script', plugins_url('', __FILE__) . '/admin.js', ['jquery']);

    #wp_enqueue_media();
}

function plugin_section_text_email_news()
{
    //echo '<p>Main description of this section here.</p>';
}

function plugin_email_news_from_func()
{
    $options = get_option('plugin_options_email_news', $GLOBALS['defaultOptions']);
    $s = '<input type="email" value="' . esc_html($options['email']['from']) . '" style="width:100%" name="plugin_options_car_calc[email][from]">';
    echo $s;
}

function plugin_email_news_theme_func() {
    $options = get_option('plugin_options_email_news', $GLOBALS['defaultOptions']);
    $s = '<input type="email" value="' . esc_html($options['email']['theme']) . '" style="width:100%" name="plugin_options_car_calc[email][theme]">';
    echo $s;
}
