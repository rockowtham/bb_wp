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
define( 'DB_NAME', 'bb_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         ';0a8Rm`5njMK/ZAu_|tpB D[%Z,|(xJ62c63aAKD><U3L#A^gqlx#2w;5!eE_?&>' );
define( 'SECURE_AUTH_KEY',  'Abo4XRpPy,2gjPMr2<CHF;[YN+tV@kMFZaMxO.{5]xrsn:cnqC%JP{q{:;^OW/!@' );
define( 'LOGGED_IN_KEY',    'Vw&$0i(EM&{^0Ta tb))A9Z#J:6&=:~m2JWMARgk*]ck~N``z4)5`/}w:hTTHYq)' );
define( 'NONCE_KEY',        '-X<n]n(F+dzl|R4 ZrCcP107u#YD4u4g<k;9BRS.;14^.@v]vLF%]oCz3&URSXX)' );
define( 'AUTH_SALT',        'eMMz>SVWU9SvMZp};~}~2}}?;}m*L{A*=fieqLz4Ni(zLJK7.US//P;X+sF|)K{.' );
define( 'SECURE_AUTH_SALT', '6-Zqp&gF5X8w86IzFsW~/y:%GsxDh|EfErEFKr#le}Se*X9JG62ePNA+!70{U2/=' );
define( 'LOGGED_IN_SALT',   'YgNzT=Cq000ojI4z+L[AOsp=+d+(7C## `PqY;`.A8+|ca5Jp=FR ~N^03C=<J=Q' );
define( 'NONCE_SALT',       '7!~!f0PqX0s>$iYtv=M_#{oKd%wXsk3S9+45 ,d/k-FTAe>dSXSg&y8WR8 }FidA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bb_';

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
