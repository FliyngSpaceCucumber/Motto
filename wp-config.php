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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'motto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'QL:#(Q!Nav|qh~fT?/w*2*w+v6s)jc@BUe~U9O0f:LEQ+*qwXc#QeBBwj53~r[RB' );
define( 'SECURE_AUTH_KEY',  'X28a00wv|<hYLZFkDU:9~hj`3x ]1[h[]!wv*[z:ob=P2^ydSia{=-,[X6>IBmk?' );
define( 'LOGGED_IN_KEY',    'R|sn}]<HTt4gZ=,6ca%ZiO9Bh^oB`NY=|^QirsLtCLID3mSqr=H.KhtVr%e_a.ew' );
define( 'NONCE_KEY',        'lB51M5R;R%j@y{j!HP1g2gx:)zZ!n_MeNrkH{JmcZj{*lIBng*N09oj<1nv c*Q,' );
define( 'AUTH_SALT',        '|{!>a)U|TA+ib^O-q$_c{u22^/M4:jd,JVH4r}up^fKC}5Lc}>}]t%!_MM-48D0+' );
define( 'SECURE_AUTH_SALT', 'EKOFB&9J!if(K1wIr4MqJ|dud5?n&.8bHPhj&nTf_Oe%lsz>)2<s/d<AFu}]x4HC' );
define( 'LOGGED_IN_SALT',   'I{`-z?S9XkXE~)%*t0+SL[=:{;yLHdyZw}&8 aMwo|#J5vT2k]5zAk3n9Ut/:Szv' );
define( 'NONCE_SALT',       'pO~OI[??`1Q/M/ 9,%w6I(exYr-#i;*e<YvMKVoEWP%Udu7gM>.7ZM-nYf(MU{GP' );

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
