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
define( 'DB_NAME', 'homework18' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<>m::]>Kl/+n_n@ug#a}|]!yVbu}0KJz^kxv,|PQPQ!4GAvJc-u@A.D3UE*7++H+');
define('SECURE_AUTH_KEY',  'D[& CV+Bun$t)/EQ 35WlRw-tq9|l82B+8u$l/7Nq<&q=6jctv8-dcc-pf7hP<|E');
define('LOGGED_IN_KEY',    '.f_55`a]HK}Yv0+O&q{6#c2TQ56#-T|=ANwhUh|Sfq?TQ~r.0.x-9 U*K-WRFWT/');
define('NONCE_KEY',        '+hK3QC*Ld,# QA(C) 1*HF!Zj<J1{_:Z.Y$+5.Du,R;N^fT9mu4;~@sBHe^DKqU_');
define('AUTH_SALT',        '/3nR`*nn}0nONrX-ONTwRNG]~KrVQu6_lXCj,tVO~(QrDM$=toNCQ@|)2(u()%aw');
define('SECURE_AUTH_SALT', 'H@V@WaQsv|3Vjg|C;gF{y|}qyC pXi%8Ku-oo0#1 SV!zTU+?QKxGal>&O}c4->m');
define('LOGGED_IN_SALT',   ',=GEcI+RNTiM|f$w:Z|OBucA_BkO].-x|<K-hjT26dlc&EnEzl&BP:2^X>kDyEnZ');
define('NONCE_SALT',       '!ZDZor-=l32C-R(>@?N-ETL|AHPO?x;g&/z4F5=^5*KH!JH~Xf?K$poTvN+@~jbW');

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
