<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passer' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e;(Z~%u3!9F=;^}3>WD8M,/Sxh>?YC_BE0ce%PBfASkg>N{QI+{LAx2lt<X@jO]7' );
define( 'SECURE_AUTH_KEY',  'B.N6o$.0vK>u)$[rLEMo9bj}mnUiRh&s%8;dZ[(+d@XH,1LXq>v&kJlVE~4i&<Ci' );
define( 'LOGGED_IN_KEY',    'IE:E}SLeAgOKv-Y&O/LEzZ|_|(5|tC5No0zx#VJb!#{|pQ&/U-RfN2Sv[#s!rz@I' );
define( 'NONCE_KEY',        'R(gpJ-3.qvU<:.U1df+f,DJHes>U,c_E.3yA1nk< N0`lSX2hSS@t;KjrY%$Nu]4' );
define( 'AUTH_SALT',        'kz53Q*U#3zrFx-<s;06.;j3v8//{&tUY&8Uys!F@cSD/SH1kq}iq)PBD)N=cs 7|' );
define( 'SECURE_AUTH_SALT', 'TRo;r#gjrr)`hiS]UmGg|1O>L452FSa)=b1y9Th/%qN;DA jWE)=fonIjVhFIQ;,' );
define( 'LOGGED_IN_SALT',   'cO /LkNBq7$;,nxKHt&P^0ilxF<A kOS$K3]@b9(s w!y08*qJm0kgtGCN:qaR<e' );
define( 'NONCE_SALT',       'IO;+)lwuzBl:. k[Os>}dSy#XOwJ$+gV#cF@jh$|c9-ZDN5- fZ]yO3!uy^gu/^q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

