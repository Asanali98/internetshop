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
define( 'DB_NAME', 'wfsite' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',+#,kjBTB^Q!*0Q-xW|sfeTATU:2}OPTC[:#4l12UnH+!iY^1h#)a1dH|?7NxkA5' );
define( 'SECURE_AUTH_KEY',  'z4=b(bcKz|pRc:70N|0PS,>V{HPrYJe8Q2iLAFn.E~)o Vkh$%^<A^q}-#e!t/7|' );
define( 'LOGGED_IN_KEY',    'HI^3WgmD(y{iGks+=-T)c#B)vdmDW6@*tvUn}=AWm?t(x2u+P.H#Nhh@?Im.0)5b' );
define( 'NONCE_KEY',        'qQaB< OQ,>>NRXsn`Xs6s4z)es)u>*CCM*4{rSaUw.^YGe>p-7/WWz+v^RhNETYJ' );
define( 'AUTH_SALT',        'MOW>m&uXd!|$3WH8MF{rF(/g+$NcJ_Gx1,Y87h>! S{AefnlIF#jX;`n+WeL)h2I' );
define( 'SECURE_AUTH_SALT', 'OYcyI4_xjv5j~dz[S=vBb[KIGv!!Q&n{&BCRX6QX6b>,wuRqX-ITaV[0k3[Qp^5>' );
define( 'LOGGED_IN_SALT',   'Sy.5/w.IjXw$*Q95.U{h0>]L*|YNdzT.yS rzUI<UqufK$LV_?/dlb}BfLX*kFG~' );
define( 'NONCE_SALT',       'aIF&BN|(WXZYVmcq_|{pp7#;*AK+3L8lVbRmv@~1!UgA_g-.-5lxZ<Aj`,jGns}!' );

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
