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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'VD[Dhswn-8_ !98ea{vD/1v~P,J#I(2;lbNzPZCR|CV8QiU-rz>A+{ &CtH-Ib@2' );
define( 'SECURE_AUTH_KEY',  '7+5]E4|):(2Aj?}qBS5O <Mb@cf6J/Imvzq0r~-0DB{]?-;j)IE7}hhR`V^UC&$h' );
define( 'LOGGED_IN_KEY',    'kl?IE3!bjlHK;Bi4jeU7&=L*drzo1J=F&s;eDb.`uX0%9I]@x6HPVkpC(:WWd1j8' );
define( 'NONCE_KEY',        'xT3JRYKYf(xF17|HvRblR&iuuoAc.vU`rFS?B+4[B#n5+Xuz>xh$i`U,~<Od%]J.' );
define( 'AUTH_SALT',        'pcHB2v%R06K|Q*>Bpu_i(.P@~ry1E^yFVUWX)aKig1=ycqL4)a<zwCPzUoitMMF[' );
define( 'SECURE_AUTH_SALT', 'cX%hWX30wCIzhS5q2Zi:W^c]TWRj-WY6jPxY-;).At*U!,T`/30{4yckINt xdv>' );
define( 'LOGGED_IN_SALT',   ' x>buOf]&S,Ykl$;L|1mNy$TzA[{hLY%%HT8INc0-*!/$K*vN~w.]l+o7z:+fr3N' );
define( 'NONCE_SALT',       '49o:hiP[/F>Ez#NCRwe^>:[9=`S2WK@,9-Se5h?|j>x#[!d ;1MrPmv[eG>wO3Br' );

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
