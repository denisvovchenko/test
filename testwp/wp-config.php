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
define('DB_NAME', 'test_wordpress');

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
define('AUTH_KEY',         ':z}fE.X^hk]LbKxF @?cgs>0N!8)OS,`L3[L//r:*Ly>_%T0%B6fmE Q/2YBNco{');
define('SECURE_AUTH_KEY',  '.PNO[Zls*RH,[y,[wx/Ak_?q6T=Lp+(>b4v>]ONS4YibnS1H~zJ^NWn2UG9u_N^`');
define('LOGGED_IN_KEY',    'n_!:8=wFSb.(p{&Z4L!qe}jX4t(eL}]T,e.+U~ix=D*+Y7h4UI[p)C~Ee}`TmQmi');
define('NONCE_KEY',        '*KF!m1?wW<+ewXoF~8,bEU!qL{TK86GCFOGX?J%[b6v,+syW($D`m<O<U).JUwKY');
define('AUTH_SALT',        '4@#E?!MF;+Ct80h85U_qi;Koc3TB[ NNz;I2#q{+tI*<,K3(kH)RQnraO9N+GGK7');
define('SECURE_AUTH_SALT', '7#e%p{t?(xK]Uowb&Lh,:FW6|gm,grqmtjHQL:3^m&>12ealk8c.H|7B#O3t}tpb');
define('LOGGED_IN_SALT',   'xiF=lNT=*V4j>>R9m`wwEe4iLjLxAR$bHz@j.~xZh]Fv9f7X-uGd{[jH5prW$/k4');
define('NONCE_SALT',       '-zrEkchmUb+},YR&5vL%9Ckk?,w>m2Mt=qt>m~ nkhl$q?F_1fp57%,Q9V|7o7W-');

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
