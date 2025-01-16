<?php
define( 'WPCACHEHOME', '/home/u742782749/domains/healthykido.com/public_html/wp-content/plugins/wp-super-cache/' );
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u742782749_KHyzM' );

/** MySQL database username */
define( 'DB_USER', 'u742782749_5pJ9q' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm21S5Uqyrm' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '2,H]A#GqOO{R<FB7@LkTNCeS)+kB=_XJPQ=Uy#r7yHpMXe:Ah4-qR14d5&t.<g|1' );
define( 'SECURE_AUTH_KEY',   '*}-Xu]b}]$vz&jYH;E}#;X`x)m3RKi:$>m(`$;vA@$]{Xol#(kBEjP}PXk^2Ia~t' );
define( 'LOGGED_IN_KEY',     '0]%c%0Tx8~^Z`>Vh!^yET#yH]wpM4&R_WBh+_^7ls6qMec4B,s){hgF@.T(Pe]_4' );
define( 'NONCE_KEY',         'A?P@w3$Cw|fv1W{R#C~#aGAx|:/o6F>xS8q={Ih8;)l8$LEg[g[xbEtZTl#/@?u>' );
define( 'AUTH_SALT',         '#;L.AQVSQTVAG[J!Bww/A*jmj^@nB$.~:cLHI>q0K8dh.+~Om@l$:<mWAl:O_B.]' );
define( 'SECURE_AUTH_SALT',  'D4C9Aw0ag3oFvQ)o4s=+C^`0@Q=(:W10&{&s?4PN7:8*; Wu?*viA~h5+Tq:R{qd' );
define( 'LOGGED_IN_SALT',    'PIWCEji]fa9f`DQtmuEgHN{luX$gfEQ+bUbUJM6LcCB6Xk*f;)NYJ/&rsaUXin6a' );
define( 'NONCE_SALT',        'vbzv9>y,X5?Qt5em[aU92N^h`:K}4;UL[j0.[`bOm=<d*3<6*k6nc+f;;.kAOzl+' );
define( 'WP_CACHE_KEY_SALT', 'ndSSU+!Hf&zrg*Q9SDTpo#rbU&XI<jU#& V+pfyz&?9IZ|0Qa=PN:#X^@3<)E7(:' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





define( 'WP_AUTO_UPDATE_CORE', false );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
