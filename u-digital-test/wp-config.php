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
define( 'DB_NAME', 'udigital_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'sFku; X~,:(M3Z}bK?S.AklXVl3nU[`$LUvfsI/,PXq0^;S:i(J Hrp/w<S:e y7' );
define( 'SECURE_AUTH_KEY',  'u|{53,H8mVN(:c*Mk!!]71)dF#E($G^iBQD{U6z-tg6ZF{g|h=N}aYa(mS4E4.[_' );
define( 'LOGGED_IN_KEY',    'T=7YfI@O96{9eTK2fH,m!L4?agCRHhPFSv1Xr(d?Y?m!?zSRD8>V,fV<t}:)jk5M' );
define( 'NONCE_KEY',        'X.E{?yibQ<j13c}sX181lIgIQ>artDHc5iR}634z8^*ymzV%D&GMN,/5X(A=Reb)' );
define( 'AUTH_SALT',        '/Bld:)1Q)1^>tZ::$H_9dp?o5`TumneHK%P;G6I#MMH A-#3aEYQgW|JJRE<qoaF' );
define( 'SECURE_AUTH_SALT', 'nPi,{ m!jSG6.EKgf`<QD,DpJP.2Sf<b:,tstAE,r.Bi@{%IsYTo7%+-6_@U.IFC' );
define( 'LOGGED_IN_SALT',   'd5CSH[,39Wkg%/m@5XPBfdifyy]YLja-x*8rRgAdd1pO9aL#hSR2D?37s}9Et!G^' );
define( 'NONCE_SALT',       'e.)q.yhP:<W&{5k^#o&]lwOI-[c_W@vi*s1xI4sPH.c iB[i04%qBI.k_Wn?=g6E' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
