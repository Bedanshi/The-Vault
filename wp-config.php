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
define( 'DB_NAME', 'vault' );

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
define( 'AUTH_KEY',         '*0}0]QT<rl{y2!I^ik{(MSL|A!)Ill<BVB;>kW6JxT=f.+/13yYWLW)a2| d?N`J' );
define( 'SECURE_AUTH_KEY',  '*g@0efIrB(:dRA^o_M{~v(Z[$Qf(NZIy+Uh2!$;$N=K?:Hpdv*lb;,f(qx*^#Tko' );
define( 'LOGGED_IN_KEY',    ']q0PB^8L>|0<dMh{l+(9TVI^D@bxjvOX<#{VGB-?e:;7p?B`0%.ieX^B?_TeJFBp' );
define( 'NONCE_KEY',        '[+O?cu*NAB&Y.Yl~gQ7gRQ?Ny9 vx?3rpKpk@Kb+JTDs*lyXXjY[3Lhc)u@-3+]v' );
define( 'AUTH_SALT',        '9tb?sxr<LDn|w>l@gH_jQGx=[m&h&Dy/z2sjWy8CPt:&S;p96[(~^rr creBH}nM' );
define( 'SECURE_AUTH_SALT', 'e}%X]c3B@>tMm-5dume$WnsAt1&Uu-Al4>#XDxKrsE?3$xU+O:GREF0`D#}bo]K-' );
define( 'LOGGED_IN_SALT',   ']iMy<yyK8&I=w+?nUs:S=NZIUPA~v)*([pJ4g=fVdD]+GuqX6)*^d.fUe HdNV73' );
define( 'NONCE_SALT',       'i9,ywjuy@:/72(akOAITVP6*sC(^SE.Kojs+{@Q#.[I~/AOwat=+UlJ- B`G;=yb' );

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
