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
define( 'DB_NAME', 'recruitment_1622874193' );

/** MySQL database username */
define( 'DB_USER', 'recruitment_1622' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZVQk6977F6wtPPmJyGUoB3jv58C4Ze0RtrzRpCUbgtqHchZC0Lr0j' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'N-aIILg*UKfI_QF.eFn43ICw<4@p0~.VJzWLTcr<?EV6XBV8uYvddPvEp>wWl<NL' );
define( 'SECURE_AUTH_KEY',   'v:mdbxUz,<Y7^O@ZWjUFfo`Mx3;7-,AMzeFKuf5FPXQ,p4G8Kxvue5tn;cKdV[wL' );
define( 'LOGGED_IN_KEY',     'Ftur<VTAjBtsr$T)5&A/S`2D<#>7_wj]FTX?_K8#}p+Nm6?Io*5.+qZ)5]t0h(Sa' );
define( 'NONCE_KEY',         'TqdexMd*QRUv:pQ[ 3=hrxqq|5<3ve0V5_`C.);sJ$%()X}E5eG=d[Wa,7Jrkper' );
define( 'AUTH_SALT',         'kRFS&^fswjESc2]bg9MQ/%wdrc#MXx555-8s;lFa9L<&Ddi=/hK*^*Z.wz|QQ@$%' );
define( 'SECURE_AUTH_SALT',  'aIrP,ml,LrA-we9!@J&J0iX`.+U?fkgSaw0kupr0R0Iot/`webo+%+iOM6.m$vmw' );
define( 'LOGGED_IN_SALT',    'u2+F[0S:p2&K,;gDHpaU^h|p}wC<xmmo_B).A<Yjt|1wuUuwhS0g;`t4eio+eupP' );
define( 'NONCE_SALT',        '-w*(6veuSc%#UWt4*mQk_M`$r/2<n4lS{uBO=hU{i~3rtio7&5ejp2!Bn7{y2f5.' );
define( 'WP_CACHE_KEY_SALT', 'Ll<ET@fNT?j9pBElRkma,2seH,wpYkr_`IIpB -0IxSBX:?nB!L@9zGoV4th@?<x' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
