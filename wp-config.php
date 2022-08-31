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
define( 'DB_NAME', 'EleSport' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'x1ymrBafyfhuwqFNZTkN0GNSMttL5HDUq4fPcaYX2CDPcGlfam1aauwjDfywScbK' );
define( 'SECURE_AUTH_KEY',  'oqWX9mWRUktq705NDADeL9XRuBDwpoucFqbQ31d0DWQDnToczH9V79FTZlr5tWNO' );
define( 'LOGGED_IN_KEY',    'LocuPp5jtzMr8AXqxaE8cti2IG5AX2kCHv48XKAxdUfSjCimUjxznlu0FX2LNPBt' );
define( 'NONCE_KEY',        'eRteJpJobMgerFxWMYk84roKqbRoQhacZ4xW5jwgNWdQuEPS5tSDnEnu5RtPaTyZ' );
define( 'AUTH_SALT',        'z1oG3O2DGmbEGTcWe0NDlU94t8xTVIlSCEcHB8Gwmy7w1CRVteDNJvwov3rJM5Y2' );
define( 'SECURE_AUTH_SALT', 'pM0cmKRYPOgf6ogc8vn3zl4KnAPbQ0YgjF1gFfs4hgtS7Ya7Xs9Tsc8Y241DzCES' );
define( 'LOGGED_IN_SALT',   'xFCqDketGNZyA6KOPRFNvFwsBX20gFP5goLV5xrkVNnP2479Ns7VC8sJA3timRJB' );
define( 'NONCE_SALT',       'MSrVuvYPJpifaEbUkPa33tlzuRkruZmNS5kE5Ad6zLm5CcxEoQESpuzV8Lp8T1mQ' );

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
