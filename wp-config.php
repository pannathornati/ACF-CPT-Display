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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         '^b1=sqG093,C!>=^+0OfwQ^owwjOe#$<6ZD$dV*KVzSD^lp4]9o}k))jQ5T<Xtio' );
define( 'SECURE_AUTH_KEY',  'KG@+vsI2&Bia2+,@!k8r5GxO0!vffqlEcS=^a+4)m(Rx@,M)O8-u{0=Pp6KxPmmW' );
define( 'LOGGED_IN_KEY',    'C#+wP&g[aWAH:XEvxx}ZvPD5#!s[bQ>,`uCxKc%[G3Gk[Z,<[9@^>D>@N2[Cju:R' );
define( 'NONCE_KEY',        'GE?z1VN!s+g0v=`UmM+=}k veEf^=KdFF1-9Pxm&yTU0R+HtB_|SCcoOSq[gla`k' );
define( 'AUTH_SALT',        'FR|O6qW)/H<Ff3{t!6B]$PA&:HW=63qD`W7/)0)HB*wTEeSlQgZh~KO<b9$i^5X>' );
define( 'SECURE_AUTH_SALT', ']!e ?7MyQ)V=5R#Ou4Jzl&.}fkH]pVLgd3uJUkZ6bwkwL`{r(_VldX%Qjs,xFlm3' );
define( 'LOGGED_IN_SALT',   ' =h@~B!pb,<uwg2DK(VEbuAfH@BH!U02r|kHx^bf7Jj^V^()D-IK*q77&93Iep$1' );
define( 'NONCE_SALT',       'R!NkZv7W3z%_|GMKK2MAVSoDqO<T/6J7|)NXW3uMSvbBtZWLLe~#`:>wY5}k5vjL' );

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
