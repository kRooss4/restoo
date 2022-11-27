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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']ed9,E1Feoi?R{b#LzbE%i@3Iz3IN6f.HBS$<hEh#0&$m9|vsU)1R(?4Oi3.Avt5' );
define( 'SECURE_AUTH_KEY',  '}lYCW0)s(YPUPi5|hM-,0%7-e-.iYUj3$0&lCT(nm`#e8=j-|RuJ<F>=%hzGm*hY' );
define( 'LOGGED_IN_KEY',    '_uR;BV7;vAl;/s~0;=F!Adj$!EAo8sD-xL$,WyHv2+GMKxu-Y9Sz,wk3fA^ j[Ic' );
define( 'NONCE_KEY',        'K_p4GHW#lPO.{3A%bBJluITH9,W8>3nQr`GmA^KU=&lD}ieHM}X{)Xl`Zx^0$q=$' );
define( 'AUTH_SALT',        '<>ibe&,Vis5YN6>W]K)>i}7M`bqe-S`0w~VZzF6*DZ)0a-&S@yR%`{X3`5AGx{{_' );
define( 'SECURE_AUTH_SALT', 'iVWQU#+?@5Fn%lx=kF%Ll,@mUQJt>|)AlCXx_rp%MQU+1aqNvj_8>.L@3qkR*xIL' );
define( 'LOGGED_IN_SALT',   '=r^5x<gpg3uiqP?]ad3u)+*y|4h35*IX`vIX4Zr>qZhdP:>a~fnSd?C-)K^C3?A~' );
define( 'NONCE_SALT',       ' F9iJ0?;:H:*9 PLkJXC_Cq<R(^9kCNmF8!;Qh2YRU|!fld P=y1HE]6c*ddip5c' );

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
