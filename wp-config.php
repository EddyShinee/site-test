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
define( 'DB_NAME', 'zalopay_store_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Abcd@1234' );

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
define( 'AUTH_KEY',         'zRE1[K$=`a~M)b[Bbd{vO,O#aEi=${<^=*FyyTt&xC`h9`@Y3ni4bbWoSD>,QYFE' );
define( 'SECURE_AUTH_KEY',  'G`s|@2FFa4R=T6D,o9~>--o&Q)(KXdd:.iT =Gvd&k (ffSC5ao:,wM1A{3M&2`W' );
define( 'LOGGED_IN_KEY',    'hU<PuYCUT8Z(Z2>AuMY^_tZPa@kI(Bi.{N-.B=UYq<Fr>t99gO`5NWO@sdeWM!X4' );
define( 'NONCE_KEY',        'df-+@{gG5$}ydVZlM$}~I0[sX%:0$|xCBExODyTyY/1O2$x,r&<r_X=IjcwX,9:N' );
define( 'AUTH_SALT',        'Roq1@K^kl]cYLEF|VL`:D}!/hJG]H:q?>g`<`/e#C5 [m>^B8&#[iI15@g>0A?$O' );
define( 'SECURE_AUTH_SALT', 'PnL)ih!lTy%)K@qhLlE;hJs2Qhnw(]mx{.5Daz3ONVF@3&_w,5 UdIH6HcHa<UYi' );
define( 'LOGGED_IN_SALT',   '#$e7>VjdKFM;[d4UpG[M(<@G_&N#[BTf-=.;6AdK}Tflh}fW#^8 5eO!@B?JKYzr' );
define( 'NONCE_SALT',       'w9(jI}>0P`RjO}00DAR8(t0fQn HUwb/>-La^y%Yg@z~HHzZ>gh.3F S8ZbXq`}B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_zalopay_store';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
