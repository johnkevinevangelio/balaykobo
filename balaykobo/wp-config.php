<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'balaykobo2' );

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
define( 'AUTH_KEY',         'Y)*%61yybyA>XRR}-@s m?*pI5k5-NtUA>3>>*)!}YdMCn&kBWK~p6YC8k_iiZ+q' );
define( 'SECURE_AUTH_KEY',  'Vd=7Nh*hsuE`J@syz4pHc8LsB9b&V8;t|s[V$LA[9Vp4yUBm5hdJVpxDb1hT.=OS' );
define( 'LOGGED_IN_KEY',    '%+@*K8Vn3FQ|/yE&g5gMFO}%IsS}2_qm0)z)nIhE+%5&GEfrq#zSeM<=zIv(^F4X' );
define( 'NONCE_KEY',        'X13CX39I{uu(mKDE[uAL-:Z0cbcg]xz[DDJF0<#|4IWG2=9&HXu#:6qmk%iRI.je' );
define( 'AUTH_SALT',        'u1?lf~4mT=IT!<eVo*pBzQ9EAEokCpz>vew~!9ARyYH8l1E)-]~n#G`gqW=[q}]K' );
define( 'SECURE_AUTH_SALT', '%nAlz[/$$yg<s==hctgw>H =TdSSZ3`Z0}Q%y!}ezRf={-H0Y1xVn:#6&Fo?~G6g' );
define( 'LOGGED_IN_SALT',   'KA.F5qu^.bJ IVjx<R!.hCJOk@?0._wyJRzF%Tq%v9ub1k7(slB:{i$2|yH;XP)o' );
define( 'NONCE_SALT',       '6`r<?F)l]JVQHv>zD{9%FBNXvyI?St86 Lt3CM>n+Mpygp1`?TaB=i3=)!O!]E(n' );

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
