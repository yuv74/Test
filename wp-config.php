<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'IS' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p-bS{irGUQ(FU&[!oXz!Y8k$)2@Jl)O1#2 3m6vJWeB:70PRJ-M:Zll;bY!]Ft%Q' );
define( 'SECURE_AUTH_KEY',  'Y2$6iC(r4-HvQ=a.8*OuM*tbu+h(5{r%.~Jaj _{hxv<0j0wb+>3#aclD5#@e9Z#' );
define( 'LOGGED_IN_KEY',    'Sx}Y2.At-~sX9W*6:O72paG#vBP7P`1n]NUS8euL@]x)z*]e)ObscpS9+Y6s5jSJ' );
define( 'NONCE_KEY',        'aQvlTjQ;HStieGksu 4|1#JwZ$O`8|x&M^}#j*nQ7vlPR=YArz^=9514Z3#v)7hd' );
define( 'AUTH_SALT',        '4Cu<sNH8*BgjC)Q|a3dLubz..YW0Ey0%0R-Fk[H*1.7Xk5oz$ibc>24aLM;foWu#' );
define( 'SECURE_AUTH_SALT', 'aY{E$Fs7*c@S>//*bRm;;&Dy!D:*)IR]*^~VeZ> ,]G]Y,3Lv4h%8sxf/!)8v;tK' );
define( 'LOGGED_IN_SALT',   'na3Lc-Ud_dQiploQ/*|}u6B2R//K6pm8*5 $3g[S2jiIdUy=(,Q?]uf|rSNjC<O?' );
define( 'NONCE_SALT',       'ug#|@5E6]XI0 m2#K>+T)^WKwq6wmm~rOa_T_q8[VL6anu#c=@~YRa?K:oM`]?M.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
