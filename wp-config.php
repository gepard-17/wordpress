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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|_Y#EIgG]Rl.y{-2*/IFkL}.iQQ*4_wxLnkmqdRa>8IFs7W7M/j^=Mm1oA+ei~-L' );
define( 'SECURE_AUTH_KEY',  'K2;?9cY@C$?mQ,i_$Ct-RP-=S`_WR08X3GgMkY@/M(n`1b*XpS>D1w >(ZjmpXjb' );
define( 'LOGGED_IN_KEY',    'Qh|&wx6,U&EX!On9p3XDe#`6uuL%7_,yJl|;JlCQ8I_JogA(<3O-  `C1t],3r45' );
define( 'NONCE_KEY',        'zA3]#4q=inR3)hME$=]Psb`F_CEFO<VQ;BI|a1|]cRN3n2jlo:sY}KdT!&Enldd7' );
define( 'AUTH_SALT',        'V}E+G(JvP^*_5R|$Ie}1Y 8a([4Q)uIXX<@)%d|fK9.EdB#gwx(qN)Xse7$Pm#5O' );
define( 'SECURE_AUTH_SALT', '6D+*|o:]2gMA7?*A1tmJr?SR|h9(e^r4INOE0%wBm&n deJ<(@][SS}kH>yFl7]&' );
define( 'LOGGED_IN_SALT',   'S %i.!qg?EX]%@da+OK@) ?N;GXvrv:[_rFjGb^Zfw)MzBJXCwx-LS:C@Ji`rM*1' );
define( 'NONCE_SALT',       'Fg=s/33GknuGEke0$jlhK}4R=d[eTVd>wq2pCzChB^^:TsjzH3LX+p#1Gzz5@42N' );

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
