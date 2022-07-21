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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'constr' );

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
define( 'AUTH_KEY',          '#1/L;+_tK*FFq{Rc=oA~d[EXRH96&E^2j0/JOO2TAGe@=Q65oR_&R}!+:gA>6Bj/' );
define( 'SECURE_AUTH_KEY',   ')_Z8s_g>1|M)H,d7BWafO8z2%#skH|W,~VmxuV;w]7nl<NC8k%*sU?aT0QT3sIKS' );
define( 'LOGGED_IN_KEY',     'S;im/67a98Fo0F;l.qUIeE=;_-]?#<oAB<:e,cwQl-edcw}itqsP[I~KH2P)+k)J' );
define( 'NONCE_KEY',         'GX3f0rs|*_L,ti|oZOPSbZ(UmOYn(,rNkJXj_<v?[fl|wYh+8-bp_WvmnCC;{%8;' );
define( 'AUTH_SALT',         'EO0AO#Ca0mC<$qhSz^fRyS >YCRQwkDL<!?9ZC/h2f^Ca6E0_o=RdXGe=uC!DxbW' );
define( 'SECURE_AUTH_SALT',  '-Igf94peOs:%I:YQ#IU&y!AFA6Z?zR#vvfm0QE8b*gB%@t#lJU6Qw-0 VsNYTc G' );
define( 'LOGGED_IN_SALT',    '|Ym9(^7M+XZ}o=sAls4.2@iL]|G)Z1fGc_[*=gy&-iwUPLWA0P-Fui[CNy0aP|H7' );
define( 'NONCE_SALT',        'Ze*+~c62[9Z)lGwx-RM{BK0L58B+7]nf!}#yqwfMeWdaV?ycP#|<*g!k~!mw9v=f' );
define( 'WP_CACHE_KEY_SALT', '4U3e~&o=}@*!13RR:,fw55BSM]3O0IV90&oDd7m;BLF8%mQB3w+Dh6G_#EqRUDP/' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
