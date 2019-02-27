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
define('DB_NAME', 'wptest');

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
define('AUTH_KEY',         'z,dE+CmFfY%!QD0pvZL`+#E3%.xE:brs,U>4PUd_,Oj3UVI;Jpq6 ]t0c8`h5Z|7');
define('SECURE_AUTH_KEY',  'kuE(}sm{=+/ds3Nzif2K^g4g&OL4fb8Huu3z7K-j1u,;gXu]k,d^VB]V1_g|*MHg');
define('LOGGED_IN_KEY',    '*~mjdA.mo0N?JqM21z[ 6s>3I-}*6>VIKG,:b/LtYgnH#d*8~G[pk?/l.z$oTalN');
define('NONCE_KEY',        'm533!UF%=/%d?WH|e39[2?PUX6B(Yu[x?ZFkq^LxE~:D9@x`XYaY7Vl.^O`jRu]!');
define('AUTH_SALT',        'aw: x_phz iyRrRz|#3cr T]qu<}+-aF|Q-`s1}({.>3@YB>6c0g[J+/.P=e)Lk~');
define('SECURE_AUTH_SALT', '@VT}J-f>?NBcDaS=~5=>iz[Pvrb{p#G>5V{}nT y06-dJhRTUhETG$.n:q0p@(~0');
define('LOGGED_IN_SALT',   '&?f]L8~-*:D0*3xN`rDJBt?0% Xp|0M pXH.uNl$4hNZ@$}A;hv/}N=;6{}el0^/');
define('NONCE_SALT',       'S~/lm!pZFh$6fL_<:KqJf^>zR]s*xp]9hu6l(eggX9g$gv,a|q[5T#YciQu#~:-[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

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
