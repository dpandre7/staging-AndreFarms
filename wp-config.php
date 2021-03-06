<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_6209b035');

/** MySQL database username */
define('DB_USER', 'user_6209b035');

/** MySQL database password */
define('DB_PASSWORD', 'gECXEvkuo_r.(U');

/** MySQL hostname */
define('DB_HOST', 'a.db.shared.orchestra.io');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gl2-Mm4-[MD|-IL6<z524[_} +-}uOK82 72g.^8fZavrtn_v_i$$9**Q:@t-dC/');
define('SECURE_AUTH_KEY',  'm}I+jxT<}4i|xYy%qXLcEuyfCV_<tpsmN=mp|~ghY)]?yieQ?$Jzh{dehc`Ix4O~');
define('LOGGED_IN_KEY',    'tV^U9a(^9]M`[V5Gi%f7 tR)t~`@rc->%aN1V7@|~t5wzHX_&>h25g5eX^{h8r((');
define('NONCE_KEY',        ' ^vBXhuUKLUrqLv%*HKc6Y[!V?A3mt@CA-*5G*!_/ZkN2*)Y)]Wx^z7A1cWaV(UB');
define('AUTH_SALT',        'G8e3MN:EnP>+g;K!]<o ??oLV#Y-3+qD!49,* #u0Cfz0C<]jy^8FJ-*Gf8IiJ&/');
define('SECURE_AUTH_SALT', '~)2f059{Lva49Y`N,B+ZIDXNC#q{=7h9hOMKYLZ.-KkK-/h)X0a|ji+qHGN|h>fy');
define('LOGGED_IN_SALT',   'PMrwEAPJkwN[%]T<S=hL++.nH+u FpT=%0[s|10{G@`q0VkpI9J=[)b5q(Y*]I;R');
define('NONCE_SALT',       '62X3K|Sq<AW2AG@|J/z)HzK<3ZDT5VLR+xdb|1bWRkw`$ZNkH<ZJBen wa@P*6`C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
