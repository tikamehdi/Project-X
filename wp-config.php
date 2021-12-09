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
define( 'DB_NAME', 'zara' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8#fmlAUZU Qz&_q096Czw-UA+9qY-X/NdV|~WIH:;5-a!x1SljP,LKS!wCr|/%(G' );
define( 'SECURE_AUTH_KEY',  'Ac?2:F|sRW[ %]%<1xaY{z^Y_Y[Yn064}s?Lbzgf%_%.#.;T6wr45B_]pVR@6C{Q' );
define( 'LOGGED_IN_KEY',    ';?-<Y>Oj8Udo5+K_.I-.AYP1}S@iqn #k*I3@PxvkA]^xVFkbh>TLopRoPL>F<S=' );
define( 'NONCE_KEY',        'wQj#w+Z$w:;x%$IH_q^]23HKVe&^D1fKI`Vy^&`)qFw;?bnW-^cyXV5Z]P32Cwe~' );
define( 'AUTH_SALT',        's,LJ?uqj1(xqx1+3Y=TUyZJehcE21iaa,8t.@5K>$^LE9P7Z[QXzsj-G0>jYREn9' );
define( 'SECURE_AUTH_SALT', '%O/%#kB[?(Q/h*3IMi~,2b+?adFW];e.N4R~~fDEL e9L4Rj}n`w=qPD`QlN#QQB' );
define( 'LOGGED_IN_SALT',   'NR$`juE,x(AY>l)SqH|_xs#=J&3]&D!(;!g8:~@sG5CvHG0[]FE_um>!v&(379T=' );
define( 'NONCE_SALT',       ',[|RA4qf-(,nM.5{fxRCSW0lOw&WUpGZVLNn]$8CWs;1ak.NJqWMF6,LIiGB]>3$' );

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
