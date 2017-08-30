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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'K$h<=+{(mL;[!uH|tF*[.5c<|2!S3u4KT3)QFX2tJfE<R7R|r{^<.8%x)xwnkS%Z');
define('SECURE_AUTH_KEY',  'cC$^@5+ :D#[Jl|}1Y8@*be4`gN_SF%X=&o0$:.Yh.)UF-Jt tZ|iaHYJk`T4VKm');
define('LOGGED_IN_KEY',    'f6v#CvhwdKbj;c+o/,=!.}ceXz.mCd2.I9@)qdf0{eAd@C{JvNEkT7]] nmG$#2z');
define('NONCE_KEY',        '.Zt9K# GdHz7-%a)c1]^_hw`>M9%)tus(L<ZG>#K5WLIsvq4e7$t4n?>.,KAZtc7');
define('AUTH_SALT',        'ByFiBXN.ly<`5w4}|tBvS5Y+Z+79apyD@,E} `tGKE@>3TK,@U7Xk#C?mVc>~o$B');
define('SECURE_AUTH_SALT', '[Qfl2rgqq-bH2^K0LDzM`N:kniD+25gkG YQ3ILl[/1uqCH$:)W|iJVV_QD>D=WP');
define('LOGGED_IN_SALT',   '!hIggCBv/5*2bm Lp:>Ijd>*oVVaxWpZfb*3+-Cdq,F4f.KcRj9@(X/I>1/+;:~a');
define('NONCE_SALT',       'iY-xce$uH>/O%K,?n1Q}+=W*z5aC3DAu`VMOVsQSLND[XVgk`0{paCG|T5FH#Fdj');

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
