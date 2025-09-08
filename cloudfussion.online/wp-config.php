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
define( 'DB_NAME', 'cloudatabase' );

/** Database username */
define( 'DB_USER', 'KALUCLOUD' );

/** Database password */
define( 'DB_PASSWORD', 'Password@12345' );

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
define( 'AUTH_KEY',         'VxSZ1RW-]NYjxrn+-q[%Oc8.Ss<|9.EbLYC3bv6KmI e%|pBaxg)OV9lDZlXO0-&' );
define( 'SECURE_AUTH_KEY',  'm>5yN||u9A)okTOX8j+;raY3|S#x^T0Wdo//eXLF2XcYWP94A|C(vHKz-/1*bq1Y' );
define( 'LOGGED_IN_KEY',    'CD?TrL+iY>c6}^|y{G}]Q&d)56P>pi+7u2r*]0Hy1d?yn$C;SYVL8fUx#k 5#vgh' );
define( 'NONCE_KEY',        'sS+;K_cI<S|Fe#B9fbjEq;wZ4ee@1pN+y^vL-Fg +pJeFNNAE??dq6+l7Wd#h0d#' );
define( 'AUTH_SALT',        '^.|CtDeq]^R^QNZ)B?&]-k+Xp834haL-xXhEnespHqsA!1,&Yi.Jn!+eK^kqoz:;' );
define( 'SECURE_AUTH_SALT', '!.w^[D>F Zsk|d-;Mpsl+4XkQ!U4Sm.FDr^qc6p:?GJHq`DLr/^,Hli+i(BS^JEZ' );
define( 'LOGGED_IN_SALT',   'z8TZ&/v1-Z+>ee,+VBQ]q[q9$dS_Uo|rg.| eGI#6|_BDC?OSc-L].0H1lY+6;,V' );
define( 'NONCE_SALT',       'M^JvSAs){c]nafoythV6G/F$|,F>u20@=|SccM+a.@A}m3jH_Hh-[;}<)W<?U6c}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
