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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|x_t7mdE+8-ogoCQy_f:*X<(0BDa`V}FZWp,L.u(#beeN&[7hSimCKau0/hidhd!' );
define( 'SECURE_AUTH_KEY',  'YV<UZQ)IBD>KskJVg;P+H?oVECkd0|{gB:>vsr)/v0!^>@|{O8 2)uoN^R[4<sa:' );
define( 'LOGGED_IN_KEY',    '7rJW K#n;)PScZK87,NdBJcAuR@UA],~DHY0/4P8A0gt,F1`bxUl|9It7Mlr-QH,' );
define( 'NONCE_KEY',        'aal?bd4%ajjk$:XM sF`xs~g0_TUK dtSp*8jb*8,w2fJNZZjm|S,C8wSpGi<%=t' );
define( 'AUTH_SALT',        'Vm(=I1o?e](BcxOj%VJ]JB6&LE{K-E.wGwSJl5RW=p~{L.tLwi$CUtdXb9rCk:4s' );
define( 'SECURE_AUTH_SALT', 'x ^}l8G`dRIeiW?5Pt .B,-e59S3{%)iNe(jG{2BQ4KD^gEk#^^{fR5.^+sd5K!{' );
define( 'LOGGED_IN_SALT',   'XG{p)SEmkL.G&o&EvTWmh|H#OdjOG*fAGbk_l2NduRCL6-Qz4*zk%tz/28xQz?6%' );
define( 'NONCE_SALT',       'O-@1=l28xu!2x.5rF*`eHb=J[_ZmWP2au8gdH*AMGyV8@_ktkvC/5[.1@k!ud^.!' );

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
