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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rmmarketDBgfcic' );

/** MySQL database username */
define( 'DB_USER', 'rmmarketDBgfcic' );

/** MySQL database password */
define( 'DB_PASSWORD', '6nYT63ytWH' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '$3biqfmu^EMTIQXf<7E7Inu^<y^{QXjrbjv3BMUFMUc,LWh]19;5DLt+_x*#PWe' );
define( 'SECURE_AUTH_KEY',  'm+qx*HPXeTbi{2AI6ELqy.{CKRw@[1!:5Zls-ow~COVdOWh|:9G19Kpw~[-_:Saht' );
define( 'LOGGED_IN_KEY',    'Zlw,{7bju$ny^EQXfQbj>3BI3BMry^}$,0Ucnvgnz7FMYJQY^>0B}4Bkrz,2AHPx*' );
define( 'NONCE_KEY',        'XMYf,7E7Fnv$>z^>QYfncjr3BJQFNUc,}3,07Fkv@oz!>RYgt+<;WemXeqx6EPA' );
define( 'AUTH_SALT',        '}UfUcjv3BJQFNUz,}3,07ckv@oz!FRYgRck>0BJXiq;6HPAITx*<2.{6biq+mu*EL' );
define( 'SECURE_AUTH_SALT', '>4ckrzov@FNUcRYg|08F08Jov!>6EPu+<;*<2Xeqyiq*ELTIPXf<6E7Imu^<y^{' );
define( 'LOGGED_IN_SALT',   'Fov!sz|}Rcky.{2Xiqbiu$ALTEMTf.{6<7Emu$qy^<QXfUbjr3AI7EMUy,{3>7b' );
define( 'NONCE_SALT',       'q6ELIPX*<6{3Ajqy^u$,MTbjXfn7EM7EQu$,^>YfnyjrzBIQcpx~HOWhSai]2' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
