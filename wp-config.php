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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H>yg;EmhJ1!><GUcNA5A1ZB2Mc`~Ww.&]r&F@gpYgiJ3S<mlk]sls@]U)g3c`CWQ' );
define( 'SECURE_AUTH_KEY',  '])B>APn$0*jc+8/RrydYNytttyQRh&Os^1I}c*qcc=.&|Fr0~xAo#p&*9zdKKV{Z' );
define( 'LOGGED_IN_KEY',    '%xa1:RAgz*t22%A$o#T00RTMXJc>+ !8$NKRU6u1!Ld53;oc{({,ha-4:L(G0?Xn' );
define( 'NONCE_KEY',        'gZ5AE5FK=@IEq==6o[w/P$Wt*=5`p6O:.y!pn1ZhG#?f<:il)KGlRwMO[DXN<8q+' );
define( 'AUTH_SALT',        '~ Gso_=O>cOG:9J+%_B>Pyft?lY/J$8GMz}-:alkt~GK+GFo]|s%f{Tq(UatfT$x' );
define( 'SECURE_AUTH_SALT', '>91{qg^R+O0Ryw`ZRAWI^a~d rN9/0e:K8~L8`Xyn)vJ 2cRpx<XaOE4]HA7m%Kj' );
define( 'LOGGED_IN_SALT',   '>p=0n!_2i@S2aL$aK*_u|(6({Wz7T3/chj,op5zwB8R{cmh4i{~?2IZGWJcPMS!{' );
define( 'NONCE_SALT',       'X2;(Nb@0XP7_ZX -b4+1nj|}db$^KTkdhFjp058+okaX(9HEz+/ abnSC:,Kpec&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
