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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dnhs3853_wpA_DJv' );

/** Database username */
define( 'DB_USER', 'dnhs3853_wpA_DJv' );

/** Database password */
define( 'DB_PASSWORD', 'g5VhX2YWZ4l9e_X' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'DD.o^5s*[$44 O &&5(c.AL@8d4G=NvsU,P8MB-0ZrVeOpdhIa|z Jynj; /WP0l' );
define( 'SECURE_AUTH_KEY',   'h3?-a=yapTw8EFKXmj|SZR lb)/tUd49nnRXz|]({pME(tf*uJQjR7u>GUcdU[Ad' );
define( 'LOGGED_IN_KEY',     'i0Y}?Si0aRTOuUN+Pq>k?THY/qJ#9LED#mDi,WHF>?H0q(`^V1k(*ClaXdI<a4hF' );
define( 'NONCE_KEY',         'OYT,{nQynxU4P5Y{|Pyep-i/wy/(04[:W&Yp{DC~h?:&BM>/qkQ7]*-EhgGT9ZEF' );
define( 'AUTH_SALT',         'V2 X/7>g,0X%$/ p:cmXk|9U.5v=0EVN-MhQLPgw&js0.gKN`-8|q_@hd&V6JbBo' );
define( 'SECURE_AUTH_SALT',  'rVSNshI06+N0()F*1frbhF_7<=d}y.1VCb0tsA^=W&8/jyI=+pHoLL]ZohTVN*~?' );
define( 'LOGGED_IN_SALT',    '/7IxtO-{&l9kE$=d]Q7yd}-RK;I@Rs7y;C|,K|$@j&a%o07XW8,oH).h2KJ+#mN:' );
define( 'NONCE_SALT',        'Jfa.qDhxf=;C8^Cbq@.?f<F*;tiJGlNj/f3l%y88rxGvc8vhGCa7SDsrH;si7.]s' );
define( 'WP_CACHE_KEY_SALT', 'eNz*H*q9w*F.#_3ztknFKmrYC$7lc/YkR@%$s,g:]i-*(a>%1sOTv&B7On3V0NGr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
