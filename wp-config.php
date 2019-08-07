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
define('DB_NAME', 'adampbailey');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         's4mw<rg>^i:%nqN/ _vi>8zb>WGTzdjaLU$]JE=DU^./@Zs!LLGm@I1~mmm>@MQe');
define('SECURE_AUTH_KEY',  '-.P>w^jkETu|qX9u%V$ MY-|w7r//QN;$<VbYFrzo7y%EZ@Z!$>ZP-h><tA{W-;)');
define('LOGGED_IN_KEY',    'WuPm;G|,=,%|R73X|i-b`[{=Wcnvi4b1Cla/:?|6;DvIl bwcgw,*.jQOyB,=uW+');
define('NONCE_KEY',        'TK[~ (dke#}}W4!5!-{2X*K<*gOpQ` Z,V)h2n~O;a*7%R^IW b;diM.JIq1.p0!');
define('AUTH_SALT',        '#,H4{R8qI#+BAjv1FC095hH!^KwHSR:8vI~F4v_w9Zii.%hc+N-o[x`MVVHymc40');
define('SECURE_AUTH_SALT', 'mY*}xL$?GL08qIk:4yv/D!_|<(0$i?%[cf=S)zn/s<.|m@g3FsXX a7#I364}omu');
define('LOGGED_IN_SALT',   ':;:$X?]]HlUkJ4;Vc^AUA7]Y7=I5^mhEW]O4+GP:~9?L;jBwXa^WE37+ 9vGK3ni');
define('NONCE_SALT',       'x#)z|edWfYVUed9m#!fZv}f)kayZN[a; +amw=729<3$6;_mWwcMj6PJWRcGpo^G');

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
