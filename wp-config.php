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
define( 'DB_NAME', 'phase2-wp' );
ywqegt23i4l

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
define( 'AUTH_KEY',         'k_so3Ts#r_@izGI ovdWfYM1$b:/g=:bzxme2F#>/5eh-d`[~9ae#)nmq!t~Ei!;' );
define( 'SECURE_AUTH_KEY',  '4FY <b?FE_jT{P-`wNM.w)S0X/_U:--HXE=* ~/E)#p6xY?YIF~*Jh.Bi.Ngn;@N' );
define( 'LOGGED_IN_KEY',    'n[,S&ZK2+72$uXdMJPQV$)TicY_&E3dU<rP+e)SaB(dW9^]<=@.u6p>S.5&pba6M' );
define( 'NONCE_KEY',        'HKM6aFr7H<8tJL9IxujTK?}AXl=iWl:vBft}d%t@++LZ%D1dNj$A5t+,DRcP~E1C' );
define( 'AUTH_SALT',        '|Oq<[;gI=A Hh@t..:NR/(L-:OD5D<8|9GLlG{Kgp/GPiz$4z<=3om[oXlRJ/vm_' );
define( 'SECURE_AUTH_SALT', 'n%zKgE~R+$7brkOuIJb,xDF(,d9kxo*e#)(NmXAJX{my/t+H&s45VY%S=IF`([vY' );
define( 'LOGGED_IN_SALT',   'ml:hGS=BQ0U:r%_a_?$rHZV^d}MtpsdhtqXJIXhXO`2aLu;7]S$t2oK /OW>37~U' );
define( 'NONCE_SALT',       '8S+dAm4;5w*ti]D;qVhEcZnsSWDBG{Wp7~2 5G_pXc@ecG)@EC=$r+p0QEy=lbtD' );

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
