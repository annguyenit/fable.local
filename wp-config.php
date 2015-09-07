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
define('DB_NAME', 'wp.local');

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
define('AUTH_KEY',         'o|&KN2|<Rth(g56+?p;+}mU/#eldb2d$[M&^r49TMw~;vk;X|dwEs)ZMai_|aI:L');
define('SECURE_AUTH_KEY',  '2h$j.1/a+~=%g$ly+|&P6Z21$,YygiB8-t{r8tP`}dD(P/bAw ([Yu[:FT%Y`ilP');
define('LOGGED_IN_KEY',    'ix_4XU$U4h49fYS]{Fi<nB+;lTi[vw!)(%lemm|#$]b0Fkw((+Ih;qc]7Zo{F;|h');
define('NONCE_KEY',        'hn?mi.~/#*t4~<0d-(7*NqLivF;Y+Jj8x7fb4?&-8Yp]U9[@-31zPjT|?E0Nj9+w');
define('AUTH_SALT',        '%P$xSx5sDS61]#PLp7Hp1U/c){h^>40jCFxQ-vaLPjmppd{GL&XY_c&nVh.4e3.z');
define('SECURE_AUTH_SALT', 'x:Y*Y54~XmhxB`&g^~fT[d-*zh.LH+qX@bK.B8Z$P1;%r!|VW=>UN*M},`1it VN');
define('LOGGED_IN_SALT',   'JJtI?=r,+M=+rggF!Xc (J|UNwa!NT}V;!V4,w).IZ*,/dXd~o)JyR`YEBLvJ|_%');
define('NONCE_SALT',       'wx1,t+KBPKW5g&2~2B%}RjojAt)DY9.9.JKH4ufT<5}@/l++k(*TfO^!3P+WVz+P');

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
