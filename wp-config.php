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
define( 'DB_NAME', 'happy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'E+?WK<6p,m1vciWdPQ$-)l.ZG`U2s#@hs3kM(}UEYoz%#rXyFZI!p#d+d|2iq+iK' );
define( 'SECURE_AUTH_KEY',  'op`US+/VZA&yQh(,^7+$-9q?YaGy(yKk)?:P[z~NW6Iv3L/=W6icAeEPyB=N&p0q' );
define( 'LOGGED_IN_KEY',    'RrH@$k)7xj=a!c$<xx8iJD%+nUmtr]K&}F@jjNK~it_fB&Xaz{1[ib$6u0&Yd78I' );
define( 'NONCE_KEY',        '/9PXw!BSNT/1$!B74ex:`83Q5:&E.Q^z&v#iKZ0/a41bqMc~kept1$A$}{V,|;K[' );
define( 'AUTH_SALT',        'SMlD^VDe;oRhxf7iGa~n _N1w2!!_ez$_y@,rZ*81o[yWyzqsjukBg<Ur6D.y8yD' );
define( 'SECURE_AUTH_SALT', '~.kXdqWKa4VgF4R*uP=.6_OL*pW !AT>6)rT-Q8eu^B2Q7`8-Yl(l{xey+}UaImJ' );
define( 'LOGGED_IN_SALT',   'l1|X&qnP*pi[LT,G)8.nbE;0lB`Q0I1+7WCk?fHpVl$w9f&tX&trxHC^OSi0SFUA' );
define( 'NONCE_SALT',       '6$.6D_uf[U[Hs[za%~cj20sbnK,di-+Uhn +gzsK.^7{Jr7NO(Vy|IM&/x})?Jj8' );

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
