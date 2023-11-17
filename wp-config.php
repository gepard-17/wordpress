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
define( 'DB_NAME', 'brakslow' );

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
define( 'AUTH_KEY',         '.yFRMd+{bNL<FB+U!+v*esZFcvJxA*F$A1n,@.AV}?P6;sEkh-YSxd*B~~vu)wO?' );
define( 'SECURE_AUTH_KEY',  'Fd#{8F1jfwQL?_nWmreq~_:?JpKnw9jM|11bc+AZ 056RJpXzw( h$&@vnED$:U&' );
define( 'LOGGED_IN_KEY',    'a2^AzQ5S4z-5wgG_39a_]^DG?lw/A?APsB+v;6uzXX9Dwl>,jcwBOK.M,Fv[%SMo' );
define( 'NONCE_KEY',        '-@FF$+yX}L_O<B$E}d:^|h%i8M#``J<Awq=#aQT$;$>U^=#v[b160M@q~9ri.LCd' );
define( 'AUTH_SALT',        'WB-$ PtBAXMEf%ntA$$^9)vl_?q_oW{?)2=`9p*a>-`=:{7bU%)n+}@Kf{PHg>_~' );
define( 'SECURE_AUTH_SALT', 'cC~4CE.B/WGoBggl(csO;CIkIdZ?w~NV,<h/I{g5`K0qFR*0c3!]m$!boVOTlcf8' );
define( 'LOGGED_IN_SALT',   '!w/0DV_Q%/I,m([zAkag3/S>1Hr,u9Ol~3#@`k8OR-#({- 3lp8}K]lZ$<3R_!d^' );
define( 'NONCE_SALT',       'FQs$2gab9f+W5#Rx^ANLPXJi?Q{/:q@PE5 z</+%]L$QbJv_GLO],9:a7WPot*i:' );

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
