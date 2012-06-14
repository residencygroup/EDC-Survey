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
define('DB_NAME', 'edcsurvey');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Q$%Xl?1gtkX3^|L5*P05!lT$Nmkg0If8w-t4m`:o7}z1,Qg5tH;K]G8p>zt!m<Dd');
define('SECURE_AUTH_KEY',  'WWSTyahG=|Z@:Ydm ztw ,@Ig0sW+y|PkE7|)+;gptV>7-}r{Fr74/<a0NC-zVdI');
define('LOGGED_IN_KEY',    'wlawfO96*Ut%`Ip-z|Ej:Ir<<|+;OJeI7_J:iV+d1B+{p%- (kfp! BzsIkUr,[$');
define('NONCE_KEY',        'g|(xJs$5WK!+YI]&GwS76DD*o:<cx voPPZWR&, $7P!Oe4<_s^,2XX/7>~m+8JV');
define('AUTH_SALT',        'At|O`@JF3X)+Y0_qo<^)xs;%Hst8laFr5;et}V?PS/Od3v,P+ti.qZ$boim8lB-+');
define('SECURE_AUTH_SALT', '2jNlzT~1j$P>;P-)a,qEXc5I-i-yWRBc11s([[ yh3][`3orXLcBqk3M/aW<bGgr');
define('LOGGED_IN_SALT',   '}]_/ly#qP)ugcedC-&|FUv$-#$Jp}Pb-Y@CJLOQ;b0{&ujZbrcs,:&P9I%$4.$#[');
define('NONCE_SALT',       '![S$+M8nciX/<Pu|:rVKnzm6qTD)obij2aiU>|^oG-,Zavb0G8De5~]H:D-M^ky2');

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
