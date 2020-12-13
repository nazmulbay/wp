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
define( 'DB_NAME', 'dreamland' );

/** MySQL database username */
define( 'DB_USER', 'dreamland' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FLQlmhFIOtsOMi5Y' );

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
define( 'AUTH_KEY',         '%@Jbf8xz=n<b:le^~ut^0%!~9`2J{R9_;KW).Rw{QKKS}h~XZV^/~jtg_7P wT%A' );
define( 'SECURE_AUTH_KEY',  '-B/h;MFmJ&iu`l|.4(_!<MSfNziCtIPS]^BJJ9*C6KO,yUX/+lzj8.<L;8&Y=Q ?' );
define( 'LOGGED_IN_KEY',    '4^:*i;LQWJ#N(ZK(y>4xm)OE}Z^2+OBf|Voe}>}ZyL0g$|UP0d-X/ ~Rt08D(mK%' );
define( 'NONCE_KEY',        ';X:--qht4.dFa$xEIVwhEsH[@C6@ytm9}vCP<.,f%S&*]/6]LH~^! $484aD$Hbp' );
define( 'AUTH_SALT',        '#`%+>)r,9*8G>H-nSu+Wij8f!sga=PKbSDhUQ$~.pWt|4fnuT$j=OR@-uR%>2-~)' );
define( 'SECURE_AUTH_SALT', '>M8ua6)V!kya5wiX_Y<]K91w4P`6*3Z tWi&%kd}Rop8M:mAN2LY-FnEmAf.fX2X' );
define( 'LOGGED_IN_SALT',   'y3(1Ezc%LZ3:+i&^d.|}d&L+z#]m<mmxw.=<jM=2Gn<X9<pU:0m|) )WcL0yBTJ7' );
define( 'NONCE_SALT',       '9F=CP?W?Qc3|Os)Az&Bkf;OcH(|& {2aJvOFXf*Wu(;eW@oEbths}`Oc~YA;OP_F' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
