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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'user1');

/** MySQL database password */
define('DB_PASSWORD', 'password1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZXV*Kk/fS~0fOts,aS1h-NG4|ToX@3Hdu^~$A,>N9W$0m|qEDwq:cALtUyIG|c;J');
define('SECURE_AUTH_KEY',  '-d+*$5&E<c_bI5V*C<`+=;kfxm6nnHCxI);S~xX%WtA/8PQQ|B59-#McMPOd{E[C');
define('LOGGED_IN_KEY',    '!V r68l^+9BK{|gQ++x1Sw|LA=vOti>N<ZGL*`U</cs?+bYU|d=AY4wO~CWvxcq_');
define('NONCE_KEY',        '7/lj`TO?R#L[SxC uMf@^aYR0&wliqRi-4-i/xE++G3`JbPxzH|UJ5ACSp^#/D*^');
define('AUTH_SALT',        ']b>vt4q?1#Qv$1b:l7m+p|]tlOCB$-tmcJ7Tx-%6xILa7CQ_@sq04|2p|-{}.)`3');
define('SECURE_AUTH_SALT', 'N/hGXssD.r)-X5@|-RH/C+im+<|J<[a+Dqyk^WO+j%>Hgu#d /sS!H6IHbea]U`B');
define('LOGGED_IN_SALT',   '5icf_wL`?t25~ 6D/u;6/3<zE+vA[rFn$4Iql7Ny3gvR~XzY8/!:dzkY(,4EQ{x.');
define('NONCE_SALT',       'H?K2 -A$aRvR%&S8>e:i{6s{x,[_1r8M|P^(x?Q[g# 369%[)>Lz[==@M4tI;9A^');

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
