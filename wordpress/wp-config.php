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
 * * Настройки MySQL
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
define( 'DB_NAME', 'i02_wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'i02_wp' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'O{3B_Fa&q,IRHH%6-!}PRRTq]QsTt5|_(Tu&P0s jE(@.m978@+Juq5DSX{@o6?c' );
define( 'SECURE_AUTH_KEY',  'zWr|<h~sTOSPAsEh(/SKsi?lQi1Aq5Ke;%wh}n~LQlCarH+Hz/${Qawb4g9UVp8M' );
define( 'LOGGED_IN_KEY',    '|(T/^*0u e<&4m_-D_>zY$f9V|hUN9lZ 6{o.eRYF=SYiA^[~%[<Jy=*4BAB+24;' );
define( 'NONCE_KEY',        '!wCVUldiO|A0iK%R1;%8T`mx]i^WOvT_QZn2pEO6XD2^9_ST;a%!M^}u<I75P7}S' );
define( 'AUTH_SALT',        'yf|Dk{)n|9Q/`NQm,QH#OI,xpk?isU?SFfSN]uC1[-frkl*}H`E*Bhi$0,YblSH_' );
define( 'SECURE_AUTH_SALT', 'tl4:|^!sNm_l%_e1XuUjBS8wZoA4Z@>!f7;Zn@,[#9D+4sS0;lB|x$C:K?3.jY(:' );
define( 'LOGGED_IN_SALT',   'LBo.Y?qlZm1!b>^j{/ia_ l3{qu 7gt!K%SyDJz8?>A1g(QM1Hhh`K`g%Z^qURT%' );
define( 'NONCE_SALT',       'm%06qTry2Qcx{rJGvCJ @F>>p9n4^,+=K(j9wD (bBBgL}>1y-28Vbe;DC_,Hv=.' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
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
