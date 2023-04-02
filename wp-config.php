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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|yI(jevyeDGGM@V1W8((!J~NZy+:|>%iG+lBzp<Jr9HEIFOI=Dq|Cs-Zn<Ix6r,q' );
define( 'SECURE_AUTH_KEY',  'xiL]DDJkJVeN?|ndoHl(mTYrg)9U,sc_t>.?vzf-~U=pDn_6-%IdEP.BZWi~1/xm' );
define( 'LOGGED_IN_KEY',    '>QZo,3=uTRs.UipPO4CAWW.kuqj+Ftd%um-iiV;8hqk+bLeZv|r%yE7r`^2Qp?l3' );
define( 'NONCE_KEY',        'xvG$$<9,L!:xhpD-LI!F?;@If^XG*2nNzIY7:r}(zHm9WvxZxRV~6BAL{S6[Ksk^' );
define( 'AUTH_SALT',        'iW{6&7UN#@(Ct[&U] *6En,`U#]C&41Vne4CH+lP%Xg_Jl#W{_G,K<s~o@6-hwt%' );
define( 'SECURE_AUTH_SALT', 'ZN 0P(^Qo6q$Z#ps@! D41Ge12f{W3xN|]VQ&LXd@XjDPX-`>jA15EfFY`lZcght' );
define( 'LOGGED_IN_SALT',   '6U-;%|joYbOAsoF.,1Zz.<i!*~:G54-#c)zcCrKq<I`1vp@v]8JWgia G*)GB9#o' );
define( 'NONCE_SALT',       'KF,ueu8hd{zY5B) UW{]#xfIF$8rI,^^H[7W8_`a}i6huN8DL<;OAVR^U%tL#VJw' );

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
