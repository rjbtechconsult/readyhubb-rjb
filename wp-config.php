<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'readyhub_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fb+51a+9`4AqAOb]Fe88<T/a+tlf%qJE=%PnrSn&$@JpWrMNjZPiGD7(8q|eD7/w' );
define( 'SECURE_AUTH_KEY',  'R=`a4g;EtU%TE}QO%MwI0tM^Fy:R<Ag:ZI%t8VD!!guC$3l$lL1]0ZPKK8^!5`yr' );
define( 'LOGGED_IN_KEY',    'f&%5-4ud=[K,cN`6XFVA@8}v@WPi)7AP&cSN|Ld]RRY0%Yw7gk!x_J*[H%~|2Z#w' );
define( 'NONCE_KEY',        'gdt-Xywyw}go~ycJn*km|/mlCz`,( .kb?,@/#MPln;@CBLAbTHMlayfyzy8M5,U' );
define( 'AUTH_SALT',        '(}ZV_F]y`v^J[K^UalSd=4]1)G?P4q<s%c>>Rr4Bz}oz4m%?Io)DkwvSD#=E<r`(' );
define( 'SECURE_AUTH_SALT', 'e%@}:Pq6eVqyD.FY?6>>A6>![uijYh6awTL_%hfiN3k/[e]5OWFs.uW{4YG%,mA8' );
define( 'LOGGED_IN_SALT',   'N(k3fZyc_J4@g]D?XahK})K0P(*,OMh` 2Q>C@$;~@wrTM)h^{uBuE:i~|!PB/Ji' );
define( 'NONCE_SALT',       ' .b7SPg:knbUt@|dxOhRWM@o>ec{4]FqmnU.|P{M0E-B-m1-$459azF>l;1*Q4uN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
