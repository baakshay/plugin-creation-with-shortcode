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
define( 'DB_NAME', 'custome' );

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
define( 'AUTH_KEY',         ')6t+QQPH/!3F/#rmhU8ds[n(+/&Ea/|SgS_y[2+2TZjKiYUW,aN[C<vBzWy`,L*,' );
define( 'SECURE_AUTH_KEY',  '/ldpgx8]yIk8chj:81WDVX1Or7kl+qQaG{3xjrR`w+M9w#Gva<|;h`Er:pj#l{Pf' );
define( 'LOGGED_IN_KEY',    '!@Rbh)Tei2RUN!^oc*^E-`Qx/nVWfJIun+g+v;jF!TJH^m<|D.Lr%|80(T:F;B%z' );
define( 'NONCE_KEY',        'E(d>58^ObV>_;~}=^uWk<!#8suKUUtSpZ*taR3aWc-s;g0t|B7A2QQ=q.1TvC,2r' );
define( 'AUTH_SALT',        'TDOlAHu?(bMj_O<:p4l,Y{Lr4;fG7XhkEQTsUbXDg-i#k$*WukcD%!J.(m8%is(H' );
define( 'SECURE_AUTH_SALT', ' _;I3],=TK&Vme1MQioJ,qtgYSTfOe^&t}w ,3s LNi&aK/HtESjThAHvm.i!XJx' );
define( 'LOGGED_IN_SALT',   'wFf*`uvBvJSr!thR!H#y~W(DJ|<<_pP3Al76fJ/I:pV<ps6(TWcG,s(AA)8zDt-%' );
define( 'NONCE_SALT',       ' h(gkLLuPSd[y5kZv,?}^Ymee#Y*rTHfA.Axq^q*`<]QUWEKs@[D64(40TPjkjF0' );

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
