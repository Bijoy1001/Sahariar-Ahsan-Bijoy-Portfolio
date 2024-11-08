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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbijoyportfolio' );

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
define( 'AUTH_KEY',         'q7UiAgF-lU6XK%8b/r4HXeKP+{BDoj3cXuB>;u62!6BJm{W2hROcx~$v*~b! >$:' );
define( 'SECURE_AUTH_KEY',  'NpDD$r$^-JZ*|*4Z|zfC{z7!ICH?}j[SGr=ZT %=#s1nh<euOA-|X?UJcxNq+d`H' );
define( 'LOGGED_IN_KEY',    'CN<-L1No&NCza{EGsbW%w(k1L>tAH)VN6OXMX4HeA|0g/&oZ}w*s]}~<kQl!|,Nr' );
define( 'NONCE_KEY',        'U&ug2?c+bpJTNRG6;z|.=)*J<kX%3?D?+9f%lox@sD%L3rAF]E`67 y&!8Cb]JiM' );
define( 'AUTH_SALT',        'a*[p&}B1y8a#>Xa8P9mH&|Zow06 ~2<v;]@vH:pmq=Exk]pyqrvIhWN&)K+&I{IV' );
define( 'SECURE_AUTH_SALT', 'Y$`iHxJH?cUIC$2xzTE*AMvrvcuTL-!,,0AmS2+D*_&EVDeZVw]|E!C{V4rz3p4T' );
define( 'LOGGED_IN_SALT',   'nv]9[uzI]0=PM_3<7^2O6v@i~Ho-S2SKalbt5lHWKPAEeTA` 60I?a>23BWL`+w ' );
define( 'NONCE_SALT',       '$qf;Z+__!Qs[2}a?iXYKfgB!1j*vhdayl{Qhbw|83T{ie)aDG)tCQi9}/GKsDH@H' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
