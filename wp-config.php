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
define( 'DB_NAME', 'submenu' );

/** Database username */
define( 'DB_USER', 'admin7' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ',zlME@f1Zm}Yd;Z;wUrJP)D}^Av<ce6!c,b[`x1*=0R(l.Ay!>/uz2?>y&mY!#aN' );
define( 'SECURE_AUTH_KEY',  '5QtLnqL07`).EC=#gXy(Q%sqI9jHJ>j6}FT0_h>_Nb<j+jHYW55^7uXYC&xfl?E@' );
define( 'LOGGED_IN_KEY',    'gwEH:`Of2f{t$-t/zXSA`<6VfKiR68HXl0<mZBFaInm8YTnBCz/S3Y~E([9O.;YO' );
define( 'NONCE_KEY',        'jQ?JBmcF.uXtP9.eCUP_8LD!,A46/V`yqDIG/uTz_SS1HTk6r0Pu-c=wmRU[w)A7' );
define( 'AUTH_SALT',        '1oL(Z1<lpB.y}L@]BBcP?{e=F@AenM,2cW[Kur9qDI :ma0D] VRc+8Q^:!IR]Wt' );
define( 'SECURE_AUTH_SALT', '.whN)HL}^ZEM{q3F0!m]B%PTPJ E.72DSQr)`qr9nf/i3Y-N1cD25zJWM*<8Ib5=' );
define( 'LOGGED_IN_SALT',   'hkR<TeWYfn K[UKaO>1%;uxMsa*)TO vU~Z-Rb_GN_8P`f4/e^6[B[)]kNLiWneT' );
define( 'NONCE_SALT',       'X+#fwhxT%R(/c_p4fC(uDV[wT>C {=9%Hu@!}:7H<TGa(ROi=Y&UxXVQ,(Y}BGo!' );

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
