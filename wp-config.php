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
define('AUTH_KEY',         'FnLdB9<SJwO]B4T_z^%$u0_.]8F!1WM`[wM=%1[d7,+@YSN[`!piJ^WJN_s4:<;L');
define('SECURE_AUTH_KEY',  '|}_Hc*%2`k<xzqW:6JME|*}k789Po8bN*hgx-7X^V/51s^!`U}0$sW&Od--1IJpS');
define('LOGGED_IN_KEY',    'X|dV}8v|G8aY(3VPUy1a-e>AGIKgo70OqSgm8tCecoKzE0J7|059n^D<zlxbjw_r');
define('NONCE_KEY',        '>*R=Q`#ezLsuM{>uHlp!!A2;@|asC4(Fc?XvQ:B2P?%,o8s`rI$q<V~V|ir3A)L)');
define('AUTH_SALT',        's=cXg+}_z+*=rQE<EhXX_BeLz@;eUX8~y;+-1iOY?2P[N-B++.T}.eaK<rF~>>N#');
define('SECURE_AUTH_SALT', 'Up>B(n-Ru:)PJOub[;?=t9|Y$sFtp3ITQ>m|[qqGWvlYc<A[{tt-GzBVfUWJqX.R');
define('LOGGED_IN_SALT',   'Em/L+h-s[*.jt@u.(dVW3jG&!Tcv#_+!hr_w&08bGXu;YTOz!b9;Gu6_=zkI+F@d');
define('NONCE_SALT',       'E!O1p/*Z!-nyP$>!|gqKOY!hSf4)]+&T !f!:I}-2;J5^slb;LP#Aqhrqt+Hu!6!');

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
