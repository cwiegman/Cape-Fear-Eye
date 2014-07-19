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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '-]`-A2]mN@s?:M7l*hgT$ApohM?wV|3:iP~}6)J9G8F?[] &$fk68aA(6EHx|%Xw');
define('SECURE_AUTH_KEY',  'C4}<Ra7{30OFUm/+ Hr<a[@s,c{~K/2<L!#m{IT 5J.Gj:=*]iwr:TuV2Hx0ta6S');
define('LOGGED_IN_KEY',    'MIEW#,aiZcDA[IE?zjLBl/WPbyG}9)=yI]=#RGS,;JT3h>dQ yW|*|C8Xu|%s#)G');
define('NONCE_KEY',        'l(0VxCL+nv_d~%Y-hzdwhL}bq-a,xGbiq]>F1b4Aww$!hkN(a])6-H ecG`N9?*T');
define('AUTH_SALT',        '+37A4QCoSL4>q+xE7A#<?js~(aC*.NuJ(|c3vrz3B8X#^v7?Y^uZM*>;a|C-ozt>');
define('SECURE_AUTH_SALT', '_xw|Su5?ZhoAdFeh@7Vv$up$DhDOU^|5t&04?ZQUrIQyR}db1VTuf}r@@ODY7p95');
define('LOGGED_IN_SALT',   'HR$rJhY;6r+Gpf]-3Q1+m9<u-*]8Em@ |.H,Liwv]Y(9o]_Kx{b0H|ln)uqpw<u(');
define('NONCE_SALT',       'EQQqFVg3{%mB=aE}6}>@d`SlAq6PV:95hA]} {?HPwZ4/V2Yl>4Hq:Ym^Ey/yC+a');

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
