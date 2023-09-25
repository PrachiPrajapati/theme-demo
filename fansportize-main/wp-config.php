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
define( 'DB_NAME', 'fansportiz' );

/** MySQL database username */
define( 'DB_USER', 'fansportiz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GyiemW13BvAYKIhE' );

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
define( 'AUTH_KEY',         '?DHlKIgRe({QGMA-wX%1|E!,>Oxx^~ZO~r*tydh(cEz54e7nZiR7z5?i*T>[J@L8' );
define( 'SECURE_AUTH_KEY',  '2#=w2Q[t;ZDvCJgV&dUVvYYKPK=*}_{%9E)KE>P7?[x(v^xNeTLc*NofQaOMj`aw' );
define( 'LOGGED_IN_KEY',    'DS>8qt_onX+reWJq*4=wmU2}^MA1KT.@$hP8$a}]YF3wfWE#_l,Fn:pNFk@Ia,t8' );
define( 'NONCE_KEY',        ' -G!QNKSHs<KShZBI[w%[89xb=A/<Ihd1Q:X6xM_)Kw~|VcsK[Q<[aEfb-[nf0mn' );
define( 'AUTH_SALT',        ')$5jBiFuhS)/e}hO`;/D(%m%t!68pGg%u?re`V Ti#[5_z0E#jQR^Tx8y!{UcW&#' );
define( 'SECURE_AUTH_SALT', '2gNk~5qY)O)yzf|v@[+k04J> bwu##~rI8ajUG{Sa%Ep9?L|*$].|<9f<c=]ylem' );
define( 'LOGGED_IN_SALT',   'umB~Z@LV|A2B9*@?52moX<ny)q<mndQU(jh ,r;eB^1N{+{w%a9>1iwz*tn,Jv7b' );
define( 'NONCE_SALT',       'Di3SdAR^Fgf&;|]|/}IudXAtO|f)B@wadJ26)WPUKM;6$v<P(|u.B2 e-rs7,$Kc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yswp_fans_';

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
