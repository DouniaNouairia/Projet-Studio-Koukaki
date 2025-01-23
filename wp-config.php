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
define( 'DB_NAME', 'StudioKoukaki' );

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
define( 'AUTH_KEY',         'Ey4]~}x9;~Pg<]6.Nc$q5rDV^?cF6:}[T2b1TQ]0+W8MW;YTb(Q2Bjpqed=rv=*[' );
define( 'SECURE_AUTH_KEY',  '/&,#d[2}w{j:~*-inol+]@@<*HaV3ZW8;Z0T{RA2,:<kh4BL)}||5$Lh;G tKSC;' );
define( 'LOGGED_IN_KEY',    'B.JCbs:gH[DZ&X@%|4{pVo*Sw*zTE,,CTY$n;~fs7.*u_FY.g3j2{%~$o`V@q`FK' );
define( 'NONCE_KEY',        ';-Z*^<l~ml!yTLv_eNiCk6=:D5<39>Z/^I4Z+%j$v,jV2yhef]A$G||h5*5%N#sR' );
define( 'AUTH_SALT',        'RY;^.Xy,t<z$W9Lr(P<#ai= mygfHf`v6xgG.UvsZO?c|E4EQf6SCM2|bJK9:D9M' );
define( 'SECURE_AUTH_SALT', ';LgQ0TDaBde:S GiNub}c C^reO^}9Qj5MF>S9R3)goO@G_C(o$_t-&> pO%G|om' );
define( 'LOGGED_IN_SALT',   '}d?y=3T~0#`6x9vv;;Q9uJRA2.^>(|l*:Dv; CTF}.@W2--MCpLc ;&uyxdF-F+A' );
define( 'NONCE_SALT',       'dMTtN0$2;PT*;xWdW>iKEb_rcB|LlcP#sYJt_}BgS_#)G37Mhz.JrN&%~a*.LY<9' );

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
