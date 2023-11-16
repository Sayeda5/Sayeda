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
define( 'DB_NAME', 'sayedawp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '^M@=<%MX?qX??%b6`br0O+Lu>LSRY^(Zm%}_nbZQH-pDx;esWz|zR0N~;SES-],$' );
define( 'SECURE_AUTH_KEY',  'P=Eo<O>kl_6mn_NlVhnGZfR:B4Tqt_T[w@4wZ@PMd;$8P$ZiBwvI~nyy#v#jp9(i' );
define( 'LOGGED_IN_KEY',    '9g9mqCT1:%R=e^Jefo ~s6tx)G$z3~0L0^M&thd;M^GByI)L)Aka+/2t!WZq*Q9!' );
define( 'NONCE_KEY',        '>0SVET3vl #YeSbbFRpF+){x&EPh*^@eaQs>s-B6>yb-w%#q/P{DB!,(g<Kj,ukl' );
define( 'AUTH_SALT',        '&eY.)s>aX2_N~CKS8abmM+k5(hL)ppC_n@A#mwJ?TerW^vv1/$5}AdO47Wv/NKfU' );
define( 'SECURE_AUTH_SALT', 'hR|4O/gX;10HRF k~>-p6M^.BI#M,ZpH6#pf+,LIjNWe[144Xs7;Lb2Z:.CN8;}d' );
define( 'LOGGED_IN_SALT',   'y|NSE7a=?)7d92<l!RqAHv_iOHo^ApMBSIt Wx*O-UOd^j.OZ`=]|?JuqpFs`l+.' );
define( 'NONCE_SALT',       'K8!T|=&sN9VRF/;hg]fF?ns!}~_I!bM=Y$tO|POPW@M~qEO2S?>MvG+5s1KX[M[s' );

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
