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
define( 'DB_NAME', 'tasktest' );

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
define( 'AUTH_KEY',         'yx@lRII:5@TV3! OlO1):?!?D~f&=n|b?k6Obf#}>nLOk{;m?[3+w-uevkw=Z +0' );
define( 'SECURE_AUTH_KEY',  'JT#,jNrO8WmB]T(@tyhH:XJT,5WYxSgR)r$vc@T/Hd}Oh||18zQ:J5~cKgNo+L-/' );
define( 'LOGGED_IN_KEY',    'T+=+;u{Pm_wM=1+!pN,@w0+>^)QOXF|5M7_9L$3D!p%$)!Tg_OOp)x];@5MWNVzw' );
define( 'NONCE_KEY',        '4plpgdVUjah3aB,Vr1wl6@H1FaPNaj.RgNmsxD(-}K3}ZFLK.s@YCcG,Q+._)(vo' );
define( 'AUTH_SALT',        '[R?G/.9#PV@tUQ<c!ek9Mv(`}9yJ6et-8QJ_BBo=;rEX#E(HK:eOPuNfhja/d,Xi' );
define( 'SECURE_AUTH_SALT', 'SsOjHoPPZ?=nW$o`)jhZ$}nK5 <x ($C,C`f. 7BT+MsL#CO`3?P|87)1u(-:MCs' );
define( 'LOGGED_IN_SALT',   '1T*ewQAX<>`q*$KKlM(c7G8R=`?7.%NXB{aX;GV(ZSA=|AZ%[ASEU-t3/Cyw?B,b' );
define( 'NONCE_SALT',       'S6oDw~/tgt6+$ESjqM2)xbF4]-]l&Ka-*mdm%:/^3aA&+[xSS`&7*]soU!lb.M( ' );

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
