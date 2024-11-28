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
define( 'DB_NAME', 'wordpresstest' );

/** Database username */
define( 'DB_USER', 'amjid' );

/** Database password */
define( 'DB_PASSWORD', 'amjadkhan123@' );

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
define( 'AUTH_KEY',         ')Xx.e@Hhl+u>7<5Kws80GdH6;;`dp-C_rTiD#3QM`vv#Wn^`krF(Av-OU9CYrQyE' );
define( 'SECURE_AUTH_KEY',  ',}?L4tA,Xl F 9.`XGC}I65BYQP WEl+9A_5pH^*uKn<PrgiO+1YzVk)t5uY{*xT' );
define( 'LOGGED_IN_KEY',    'gYNKvOmW.XK>sO^Ej,gwwqQqC]3s=P@b 3am.xR%x#oEW?LeW4u$dAr@_J4nT%l8' );
define( 'NONCE_KEY',        'bou689EYp3~s*y)&di5wObBC^emfw!M~L>5^kC.!H`rryQM5 DTwbv8Iw.zLEO%Q' );
define( 'AUTH_SALT',        '*Kx~K83seARiZy#0RZcX(MnbA-DkCdfc{fh?<&kc.P4bk9qD09+d=lo0 a.b]RnM' );
define( 'SECURE_AUTH_SALT', '1r*J {;&)-{]5hP|iDCfDa%W}?xuCB)Hwx{},c~4~x2U+L*hh9yL4v=/NfAy}*YS' );
define( 'LOGGED_IN_SALT',   ']:{@PZj+l>Q /98+b|drTguJN.CKj)8zV)7oHZ]8+`59qnQvBV[Q[:E81-l7rxap' );
define( 'NONCE_SALT',       'o 4VP0v,usMi6Sp/~2bQ>FZkO;~kpK1P_[oK>&?ljm2i<H+/n7We/@W*~8){a,a}' );

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
