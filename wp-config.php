<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'healthykido' );

/** Database username */
define( 'DB_USER', 'karan' );

/** Database password */
define( 'DB_PASSWORD', 'Cool@123' );

/** Database hostname */
define( 'DB_HOST', 'healthykid-a95262ffb6-wpdbserver.mysql.database.azure.com' );

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
define( 'AUTH_KEY',         '52*l5OR]dgi}}a)/|b@I,.5>paR<Qv_;:S_vJ6Y=.RT(UMo9;-Z4H`6a-RG12WMj' );
define( 'SECURE_AUTH_KEY',  '*GtpIxBi~^x[CbX~|Z^b$g`SVTOS-/*GiBgzcX.-09]bn!1&9U.^y~ZF+kQYuZK0' );
define( 'LOGGED_IN_KEY',    'a,RJylG;,uvf;L=}vI<X_(Bq=&{&5Oq22h e,>f_)Y)Oc6@oLy{n|Wu61:~ASt~R' );
define( 'NONCE_KEY',        'cFTUS-Xpr+iq8>,N;Us>O7P;*H)y>lH$b#JlsZmjhoh^|B-x%<k^nlF$1 !y^&wV' );
define( 'AUTH_SALT',        '_l?k>apV)DT:49XfeO5m|G/$DS[qHN;9^x:{G&S8X/yedE4l0DfTS^;bUMZ>9|gx' );
define( 'SECURE_AUTH_SALT', 'NdD%^?xg5W]a&REa]L&f$S>k_77l+c>ZhrC:[7$Z;*^qc]S6(BH:/5C?4u>`E`6=' );
define( 'LOGGED_IN_SALT',   'LIS+zXcecFY/ew8+v+1`5NpadQEA!3q1KT*V+y[V |A;h2fN)junE]bFGxZrH7D^' );
define( 'NONCE_SALT',       'yayx[BUG<x)T+7ODdU4tuXPx~mV-1Ail=Zhhgj}Lk&>wn|g1/p&)y/[9bL_La #?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
