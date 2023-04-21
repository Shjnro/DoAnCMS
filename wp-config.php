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
define( 'AUTH_KEY',         't|IIpH@t0Dbg;}BDix_HzmzE-<eem ZeTL+mkQDP*?IYYbkuH<yR_1m2n&Py3Hjy' );
define( 'SECURE_AUTH_KEY',  'tbZn` C BP,=76v+R3[6zT%?T&nb7~/T|C:F%KN1x.Z!Qy^V41aS{0BN+g$E:+.=' );
define( 'LOGGED_IN_KEY',    '+7L!<+=h&P>qp;]:?}G_Al>*;G9O{IDTfagIPOPQ*o<a$|ZN_TjkmAki/T?<;s`!' );
define( 'NONCE_KEY',        'w0~U%l9}zTR*$ncM{IgMN^/r$03I+;Ok}b& h{BBEkdc,(nU%Io}_;Jdn1[rzYsu' );
define( 'AUTH_SALT',        'my{o82=Cew$$tW<(tb4 C&zU60J8FIU!@E==oK#G-WMv:=cfqGy(]H9b[;5gV3u ' );
define( 'SECURE_AUTH_SALT', 'VyV|nR|v4qj^xBmZ7Dos7KD$Om!Fal[41~]/m73169HTF:SCI2;nRGZbVOhJed3V' );
define( 'LOGGED_IN_SALT',   'Ez*Pmo[;5#Sq,L8~RR|K>s:s%vvw0*}+.%wY4Kr}?9dLC<6jvj@2H&y.5Yf~G0;@' );
define( 'NONCE_SALT',       'AV&2(5wPxGjfGx<V{Mw4qA~pay`7UH*I3asJCY>ooBa1W}+Odp$-`kp8h@@8i|vz' );

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
