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
define('DB_NAME', 'pcanewsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'scentedPa55word!');

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
define('AUTH_KEY',         '<IwnXbLI0XHyy@i_yj-?tqJ3AU7_fjjX8[1vt*mHiZbwM.}a1}~7<Z -w@,%>Ndz');
define('SECURE_AUTH_KEY',  'Y<v93]y&&pH;4< _r@6K)tHafVP^7hD_E6-A:j{rG,l$TxM<dh6s9qKpIw:)>cWx');
define('LOGGED_IN_KEY',    '!o#YmvbHV>7jGx1e.Mw%1NCzFRS E5:v;|(.:#qgL$b~@(<[1L~o;(g&;zzAWcJ/');
define('NONCE_KEY',        '>s|`@{ncy<2aXv(DFS&fx:vo9$~6*B-j~21 7AP8z0B+)~duW$myhzE2Op1BEJ}.');
define('AUTH_SALT',        '%M1g``7T5 O;G V:fVt7&Fvq&jg{%c>dfu73KA!25O0Rn!)p4=*K;,/iblIKkbKv');
define('SECURE_AUTH_SALT', 'S_dd/`|4;SjAojPkmg>-lHF~M}apyPXXHiTx)cQv&wfshA:O&x>GA*_OC`[aoL:F');
define('LOGGED_IN_SALT',   '!RW$Iz52*tK-JR/lho%~FNG&,XMhm L{PQ}dVK<rM&)7}*8H~R?J`Y3_8vTG,z0:');
define('NONCE_SALT',       'G6KB:fZh1*U8Q*{V.CXT ^o(:xtD1Z;GWn[N($WliUk[,$gQb9{y?j88EOlm,97p');

define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
