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
define( 'DB_NAME', 'cas1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'sac' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'sac1' );

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
define( 'AUTH_KEY',         'ex>-[:g.S7A-!)~+VLaON `ovU=;9|DMz kSbgnbY&T@q@Zg(].<?&U,%83*T8%=' );
define( 'SECURE_AUTH_KEY',  '_?(3FpIc3n5OD)r83a-m%I]>)i-<-ZnjULo~T-;gm=`WFe{c^aNRrA>@+HP>,7|l' );
define( 'LOGGED_IN_KEY',    'UfzY2[STQiulUmB8-lG,|AaNE[s$Om_4Cc`}k-?nlnmGHZ`##W#0;s2~wgu=ZzfA' );
define( 'NONCE_KEY',        'q%w,bYbKpF~wCU`*dg*Dg=>?&KtSv:Ku]oDSCyLmns*8@<JBn`2ifNo=zBE,^l#5' );
define( 'AUTH_SALT',        'aJ6iF%Btmyy7eS7p&5a?N4BDR?)&/IrYq~1NSu-Af&.wP<N{P&HM-v(.!&m}}hAX' );
define( 'SECURE_AUTH_SALT', 'Y.L3n+xi]jNNd}[lkyG#PCP@wCzP{9d[R=fK^B|Z)/D3NrFl2p%yY1hN[xR-RwSx' );
define( 'LOGGED_IN_SALT',   'Z6o&N1Z&|}PKayX#vbzKFAaE7-cSQM2.u4Q^0O vl33r&UH}=R;xn1}&L<YauwEd' );
define( 'NONCE_SALT',       '3vZ/_1!fXTVo{G}Z8&%7!!^ofvgo&&}Hi&%KI&~B_Y$%q#01m#ro?Ej]!JJoJ6b$' );

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
