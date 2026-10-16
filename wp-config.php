<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[!*(yg5Lph8zj&+L?vMx+u+X1zh9T#OmcsdsCLjo?u}8r@YgkTtqSjVvc8@4?{ `' );
define( 'SECURE_AUTH_KEY',  'fjo.x7dZ4=D2*Nd|dVO/;W9{g9MF(Zn$Tu4g[DM$<C# WMl9=#yjGy/jP|!MvwbB' );
define( 'LOGGED_IN_KEY',    'Z$bRwQ5z)SU1tJ`vVuo>qGb|}SJ`Ps-UXmno!@tI]<5I=vnhd+;k<qlo3zi)KMzk' );
define( 'NONCE_KEY',        'RNZ5fjG^JG.uY+J:;8((-Io?Q7fgFa&h[eulEc:}/?p2LSa|lkctzH(ZiA(}<- J' );
define( 'AUTH_SALT',        'Jb.hp8Kl#bF%?LK|- F|t(z:(]s;x49azz_,koS~^!(+o4yBw/`3xtB^b0m:nN>I' );
define( 'SECURE_AUTH_SALT', '*Gw.0#jY!WI/m@ *F`p!ft=J>_;Yln:C+R)q!V->m!BirI9kc4][~}u%`@cm!%by' );
define( 'LOGGED_IN_SALT',   'no:*mKpmfbE8kB<e.n3@e=b77M=&bdRGu,kT-vX!RUur&B>iOyWQn;y<s a=eFW*' );
define( 'NONCE_SALT',       ';BiK.cq61,0r$W&4.<]gCHbZa=wd1HkHsag(Q3|^H>> QRI`Mej2S0,do>HyZ^8^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
