<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'theme');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'temp123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pszP;<QxAR&XzFcM$1OD.zz%CV1~,3vh?M*q*up2I7k>t+2sdz1^ ;| K1T4HhC:');
define('SECURE_AUTH_KEY',  '^_|`wO&JHP>dXNztQ(Sq?|2D91%5.x@|$C9{/[w#?F6SiwDuNrTh=m=^G8r(wY9)');
define('LOGGED_IN_KEY',    'I!(oCN9AR~W]35QBbMbo;(vyN[}hNq]bpeKzoIu#VRe`Do^9J8If|*&r&<^=c`J2');
define('NONCE_KEY',        'L?6=wR]kQ:V^af@;F&cS<LLi*hU$M+v#f+milOjki-7&6V3QYxq/JYbz^rH26H$c');
define('AUTH_SALT',        'u{O71l0.s>v F y<9PLw8Quay44n 8#%.(][B88HG42~2iF0T=Fvk6+(|/1,J^;<');
define('SECURE_AUTH_SALT', 'I#See6gaMZfC(]DQlIjrxn=![a#y}mowkZLp{@DN8f.aL:kp/r10h}@ppQsWf6ce');
define('LOGGED_IN_SALT',   '!>H)O/uR{oZF,1{g G:l-Qv]R!u6a:8W%NHp`G~g|NE%.(d7.VhZ5NAFAjy`?~b6');
define('NONCE_SALT',       '[22sf%n^!xeg<(}2s86KN:nXpTEq/E`T#Rya3&Gm`yl.*-cy&!J.Le)X?T{_C[.q');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
