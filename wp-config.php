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
define( 'DB_NAME', 'safaris' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         '.LXYFUV*`$8T;j;Z]Vb>tM!A:fV=g!Hnr#9OGVgEx{<,UrC4h[.FShJ)OE}IBOXW' );
define( 'SECURE_AUTH_KEY',  'od%7ZojG<-> K9PU+@4$!LdB2_hWeZ?5`crwd9]iVux)NV4neh*TYs`V8EZI.Qcx' );
define( 'LOGGED_IN_KEY',    'kufDvN[-8$ }tY}@PP.v]!<)g6<V{7oZnD$_eh%Fa8lq0fA#VOcm@Kx^C^lVeLEc' );
define( 'NONCE_KEY',        'TY$BKvMSN$:skAV6(W9_[$Nt?Yb|wgfw)fI.}z?%LaB,fkT,-35h>DzOCH;4F*{:' );
define( 'AUTH_SALT',        '_O4<*sv$m]n8r}g_=Q! OXGy]n#0YxRRE:-u19L_q:8s/:W)V_pk#-~F0u<`5c*p' );
define( 'SECURE_AUTH_SALT', 'Rbx836SO[Nqob.N6*=9[r..imtm4{>Y8/JRYS@ksdE*_^{2<f}cjQ6|sgs.{^y,l' );
define( 'LOGGED_IN_SALT',   '{r:I;Tk0_38a;@iBEn77zx*~K7`RZ>NqsB4qtC0?YV]P#mk{1t,rkrija MFxI_F' );
define( 'NONCE_SALT',       '/HPhS&~d%ZSvpg**&mN5k 4A=<yw.1:he:OtDKhK8D[doIh(1JC`_#x85iaoYgXa' );

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
