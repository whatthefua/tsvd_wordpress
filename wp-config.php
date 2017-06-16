<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iH&aCS 06Of3(GYPQ`7gHzy9|B{+WUeI@]isvp;:L/.8>&Dju0?^r4eD&0;^yZSE');
define('SECURE_AUTH_KEY',  '}eHKsd!bkz?{~D#EJjiqQ_Og?|,_=xGfF6*Dku}Bh(R3Q][- ZZ8rVI`A+T|q#a3');
define('LOGGED_IN_KEY',    'vihMDdpIvA>_~vTCYr&0XFlnoW<G/4Y3~mhaOfa0K6yEwkvk0RhMtH_dOThWGG:g');
define('NONCE_KEY',        '+y;nK6 IN}):71R298Gs*ZQo*tX%UKGhCgelX`6>^VD>XvQHRuUf_>^7M ,b/|j~');
define('AUTH_SALT',        'P1W[iaU8A.nbXN!z=;Gv*SDHO/2!-/&hO%b[7SxzB3I]md:75Z=Dd#k~BnZk7zX|');
define('SECURE_AUTH_SALT', 'l@C+h;|jx7It3Ccf#E!:-Ipc^E6ad|:^wJ*$W9W$r~=AjCUgbT3/G)O$Hqy?4(tB');
define('LOGGED_IN_SALT',   '$ay&6yz- %Ho ]LzGgU~&&s-c:/Z-9 $m6Oq 0wg8H6A|i.a9GZMHoj0]MC8ajww');
define('NONCE_SALT',       'bhe9/G@2G2^l[uns|@~=GWWPd9sBRoneF{s@i_gMA*,HA0}Jk!ijHV}0E%@iK(*B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
