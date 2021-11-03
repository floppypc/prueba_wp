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
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         '~<j]&fO1?nZ~_qE$#{oTPm?[kku8o/<{x` >R8Rufwz<fohO,lR<p-5Z-MH:_J`[' );
define( 'SECURE_AUTH_KEY',  '@c;3ES:f>3uZp;xA>s 3JE)$AH+Pqe%|q@$pm[UllXl:k]zA..4;2Jt}CltuLtq,' );
define( 'LOGGED_IN_KEY',    '`Zb7nv+r!*S<,/n!FOWK%+<~&lq9%mx.@Y[cyytK0Ts>kK-| dVjFCbkgkeeb5P:' );
define( 'NONCE_KEY',        'tzeWjna.C%MY=zt&KZ[n19}G~@$KLd[Ua:O#0tojl#5|K?l:a&)FX5<P_L>9y)J~' );
define( 'AUTH_SALT',        'Y/P%&.^esg?NXDILI1)&NZ;c:%okii&-OZ0PO<u>x_$1<Oh>h6QaJK.gZV!k}DZ?' );
define( 'SECURE_AUTH_SALT', 'f=lwWJ]qJx}._3<,C>SqD%8d3kJt7tAE-1=|X=Ri/v$_hf=Fs^5=;he(bpn;av64' );
define( 'LOGGED_IN_SALT',   'J>MWsQ&<Y.$UoT8]A8Lb n}6DN3c{+Me{WO1N=.s?J>!*11?tf0CDAZt]WLb3Ay%' );
define( 'NONCE_SALT',       'Z[s)UTU=GvyFugZvgultC?alq~?H4~:1-TO]aI#`?2=OEj_h?YWm`T@BbbSbv0ba' );

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
