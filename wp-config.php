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
define( 'DB_NAME', 'aizero2hero' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kQ}tYF(G>aL?|:Px3oMfz~.~&c_ws+SJc+prsm)5f:3hmrV3( Q^gc@-d>oaRV(i' );
define( 'SECURE_AUTH_KEY',  '(0-F%Q,PO~cF2W8F(Mzaw=ms()H2k<x6^46u/C/, FCw|?BfpV-:.pI2A|kjb^-`' );
define( 'LOGGED_IN_KEY',    'XccyYxF:oy7u+mh K#2U0=BM2zvA?iC.NL&1;i q.M6$^WE1hy`h86J(?1tMSS]!' );
define( 'NONCE_KEY',        '?$LM,A#K(`k;4KfUsCPg=li=,qs-tpdu*B.LcyO@,}Q.~B}=|K{l,++(R<2iK093' );
define( 'AUTH_SALT',        'Y5{ZEg+KKr;^KD>##)&6(YB,Uemb]Uw3Mi|1^F_$lI$T0&T#y<n-vep>{G{9xH<:' );
define( 'SECURE_AUTH_SALT', 'oy9) 5TrcTCwH MKS]bX:& B/}.!zA4z@fJx##/+,G|aQKAUWwIilgpN[zip4$=<' );
define( 'LOGGED_IN_SALT',   'C)l^M}|M0:wBAL$-;9~w`X2~f&UblEPKB1wr4x63d)[uoE[]iU}66$#2kQt%alLI' );
define( 'NONCE_SALT',       '7J!;d7s/dV620{f3PY]a1,qx&pMLF<jkc;o=T{R0Y`cB}z{_WCqADc#2~nBO{wRp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ai_';

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
