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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D%LkYSxq=RRA-bpZKecR5?^:r/PJ(C>:Vlx7aRs*N24!AXUA>Rv+M3hmWD.zS]WD' );
define( 'SECURE_AUTH_KEY',  'W@,!ooagmlfKgL)iY{7okW5v+rCcc.~?Ubdq.Mwh;!]_#<VGy-h}NQq%%frS2=gg' );
define( 'LOGGED_IN_KEY',    'V_Uc~v(Rh2w=m(i&_OzbAe)$M7|{IL|@fjh*0Fa8h1rZH0n2Z9~%n<HXbEC2nT6m' );
define( 'NONCE_KEY',        'gUX~)OujbBHupE??o(F3bNM]:MK.,gSCGVKZx*3Yuc8xwK|$D5:E~k(;20!LEBP5' );
define( 'AUTH_SALT',        'H4vOk*82r+U1seVmkc t17;0gi6`fF|S*L?Z>2QIQWyJi+!=q-QIGRNXHXgX1OZ<' );
define( 'SECURE_AUTH_SALT', 'L;MHFOmXX<(#L~[W+@5J%>Xnwu&AzWqS<<N1b%v$cY#XX5a=Ap8wlCf#RHr+SBv`' );
define( 'LOGGED_IN_SALT',   'l<,=hQj0.K%<csy$Z:cb?^EfX]amHcd,G4oebopC+ard G!B8q@y1mQCFrzsIX!{' );
define( 'NONCE_SALT',       '7]tRr$;9AqKmM;no(Uu6o.zW.6G6,<(s2P`gTo8f4WFZlFe 2Nb:.y8~UYR)MhW]' );

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
