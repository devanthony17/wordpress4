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
define( 'DB_NAME', 'aziz' );

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
define( 'AUTH_KEY',         'TTSX{4{:!g(6]17=cc^5|#5d<H#xGWtd,?Y yOPuL]`HyJ2$NCB[zXV1|aAsURWb' );
define( 'SECURE_AUTH_KEY',  'ao6gh]KG(!>lyw(k3p3#GgFA]1L:@NT;5}V.+cvXc03Eq9Jt-:!j^e8%9R*c$Dah' );
define( 'LOGGED_IN_KEY',    'L~xRM&e*e_ccq[H1d%)Oo/})}jF!k*6K 4lBTN=ux7#Z@&D<Rinncv0j3arC^ikI' );
define( 'NONCE_KEY',        'ae>#jQTSh gSym^;(>;e|ZkW,1{:R-=4_<iA9O3GPxU|oP^epf:Nx]N|N/I|k6;=' );
define( 'AUTH_SALT',        '`3Vzh-NGm7?C^n|tKm--4o@T!.zt)bIV*uOa`l(2oq9|Nn;G% n%L%KwJCcupha<' );
define( 'SECURE_AUTH_SALT', 'kj.M2mQk1rm4=l5HcM^sXyu$KCX>/li3}Df,cKYJb mhr%PE;fF9MT;o^kI{l}@|' );
define( 'LOGGED_IN_SALT',   ',|g-RPBS0LRDHY09qDk NF%;4;q=R8Zn!0I5{-<m%0nQPItE4B({i?89r`/#Rx;^' );
define( 'NONCE_SALT',       'WY=0x%z=IZCf$QxAu> FtvfV=QnVU}cF:4Y.&9lRHo)&@yo~Lso5rD$%C6Mv4<V!' );

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
