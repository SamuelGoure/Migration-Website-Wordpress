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
define( 'DB_NAME', 'demo1' );

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
define( 'AUTH_KEY',         '`vNKvthzZ1|XvV4-]Q4d+GQ4,pk:[R#y;_TgkrZ1Zs#(jkY8(L#,;G|JO}ifBQlN' );
define( 'SECURE_AUTH_KEY',  'P+~* (H ~%<m?r4H9bnp:_#/rZmrMqkb7&ECQSiU#DBKdhswLp0FKt#Yt.+k=[lw' );
define( 'LOGGED_IN_KEY',    'c-d,9I| -T+j Pig,,R-(Z{wamvf1#4-1X[8eNcwfl$PnFefF_=1~B(HNZc~@lP+' );
define( 'NONCE_KEY',        '$4?zAutisRO~([,q*!Iwny<?L/x6j2[2RHOr);(Kyf#:{Qo+Ej=(TJ33pCao3$Z7' );
define( 'AUTH_SALT',        'F[r]h:7 NExtoBF?447#lBBRGB*SM6?OL:dm&fqy7/DPF+nALe(G0fI]n3ye;.wk' );
define( 'SECURE_AUTH_SALT', '0Z%#9jTNwq#kM)pa_k!NsnRc=KP!zyq2jt,Ig1XyjrA2Y~SY-b$PLv|$-/3-k}et' );
define( 'LOGGED_IN_SALT',   'o<;A/qW$p:%R6i8zTN7Ot=;7REB(Y5-bhtIdqq]ofrO|Rg6tX}M;fF5gaHmaD9n=' );
define( 'NONCE_SALT',       'eQ]`]%|2&R-Ft}9ByYo#w,RI+:$[<5[$UQ*je]Q}6/CEf2A`ZzgtJz4RRta,iEF-' );

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
