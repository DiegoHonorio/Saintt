<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '**saintt_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '&uiIk@#9IJ3/5J)5aP' );

/** Database hostname */
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
define( 'AUTH_KEY',         '8$4$1YoBj}Ggl*T:m]qmqg2k>2Yk9<6=0XJQ*^ybL(pYp!*6*f|$LvL*t:_gp?g*' );
define( 'SECURE_AUTH_KEY',  ': cA^$kdU.=CQ+<59ky[HzSnp:2U!j]Odp%cg}&Hui9 dVsnd7cd,7cfcxL.$s*1' );
define( 'LOGGED_IN_KEY',    '0P{</l7Dk]&n)+d7eA8rE!27$-K38b{o}@&m7Ig*0}NZZ_^*%z>gSYyS5FF`27Y$' );
define( 'NONCE_KEY',        '68r)MUM/t!=yru.p+kTM|wY+V?[ .U(1.Q|6Y;#9KB?JIjjYv&<HtD9Zu/m&kI<g' );
define( 'AUTH_SALT',        '5? jIb)!E@esegDTJZ&_.(j_.d49`ZXfy=kQu4NE:kH=pvteP{n.k]*TJ@BvDK!C' );
define( 'SECURE_AUTH_SALT', 'ylz$u|fyhBd6uI/i;#o315yi<,Yj:i5E,mVDam=<g|Yn<V>>YX `FzPJowBzqx=1' );
define( 'LOGGED_IN_SALT',   '+GeG!=m[H-_3$GhPf;ALn6g</u%|x6aFC[7 8K?,;Mz.|Er<zlQ4A,5rlJT!P]W<' );
define( 'NONCE_SALT',       '?bs=AM0P0K8[M-P>zR:Qa^p6F$Zof WcQ{P:O6w1}c,+cI+cVm7NG_`$>^p?Dye5' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
