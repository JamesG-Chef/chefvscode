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
define( 'DB_NAME', 'chefvscode1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'X*J^EGRFVdj/X}W:~&_fY{m:5C~/O`p3nA*}$2/o/vi+:Wo 5D&QR3NY.XNf.8y%' );
define( 'SECURE_AUTH_KEY',  's+4;xtlc#HjT~jP;[%`9*^RzkA]We,QE;aYdZNb&kekP%C{_?.]nu5Wl+%aX^Uez' );
define( 'LOGGED_IN_KEY',    '8.ootC(!_(W^C1;VTxCQpt<_*SB5VXjyd9A2vyd+fiW|Rok27CuKda-{/Tv^#V_&' );
define( 'NONCE_KEY',        'z#TsJ<%vXeiPs>R4:Ey-t81$h@Em(d,_+zv|%C|/%aOKgNkU~Y0|KwD}Wqjuh~Wq' );
define( 'AUTH_SALT',        '5GWO?w2=+i&^1Z[AU~XpYoT&1>W4rzcDVh+MX)FyYh[`*%n?M)oU=zGtAS6]YOLC' );
define( 'SECURE_AUTH_SALT', 'MQ?X%h#xGj#H1DD=5%(<^HKaQN4)pt3^?{KdjUjT4s!;@j`$Nobf{*dfyf#.H.rc' );
define( 'LOGGED_IN_SALT',   'm{>81xRwW,RSq~#$.B(VGZs3=`kg}f3T;.Nn2Od AW?v@JT{Ma2x(=d(>BZ<?]Zh' );
define( 'NONCE_SALT',       'wUmX]!gW8WAGc,T/GVr!(=7W[MT6VWY<KyMHQ*mmc.FfuNDjjH/1~u^92Us2Rk .' );

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
