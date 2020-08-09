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
define( 'DB_NAME', 'development' );

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
define( 'AUTH_KEY',         '#~A}zR4D6_DR{N{YF[UVaS?{sEqo&1fTZ+gyp h]elP~$%`HJ=j<NvPv-Ujmx(hu' );
define( 'SECURE_AUTH_KEY',  'ha?b4B&zaM,|9&?||!ZnB]$l~hpv9vw{5kp[P_?:{(Q;TGIs| #&T|H1=sFPpI4w' );
define( 'LOGGED_IN_KEY',    'S4m+` qJpM1{G0)oAT2^1J_AS?)(cR4]Cqd ~NbR<VYsQ1e7pVtW..>m P`/}Uz%' );
define( 'NONCE_KEY',        ':>!)}D(qN2GRdj-0e@m7/QI%+.alQT&bYFbwjJXf)WsQ%ZUndobbtOzPh0$r!x0T' );
define( 'AUTH_SALT',        'i4#s@(+bX}1|s=#h+z<SKapupR&+/(J>B/<#0cj.cA2/K,EUVZE=U)oCew.DrD@e' );
define( 'SECURE_AUTH_SALT', 'icx-AVK&_*,rUk|z)fyI-;`P<B=}*&qb</Q DH~5#3)v3Ih.c6JVTG{~i2^iN?Kc' );
define( 'LOGGED_IN_SALT',   '!E!pT<g.R$PI$i{1W()>jqM/8s1wBgxkXGFrfmdQ2s*v7 PH2Rtwl:6|A_tM6ii?' );
define( 'NONCE_SALT',       ':Bdix#MIBkX]4{bDhLq$(/|L$0LOVWZ1V[%j]J:}n6kmufS(z{]0f+hHRKKmPLPL' );

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
