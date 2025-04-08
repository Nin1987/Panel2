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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'serwer130820_merdumerdu' );

/** Database username */
define( 'DB_USER', 'serwer130820_merdumerdu' );

/** Database password */
define( 'DB_PASSWORD', 'fDR-eNbAE6DE&*Z+' );

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
define( 'AUTH_KEY',         'Flh%!cF&ZH7AnvWfD:*qwU?Ja.RB=_?Os$!{hTKNt|4R0a<A$3!}^#SD=.P+~6*I' );
define( 'SECURE_AUTH_KEY',  '-=)dr7R4CDP3K!b4k,SIgF:o^Ez-W&6>C.|,o1w/ HxDmqsL7k}~k.+Ln<qLHklT' );
define( 'LOGGED_IN_KEY',    'Iv$bW=T[|PP,d,i~#mTi6s,FTHtNU|&&bWGrcCfI!.9bLsib?z*kDrY(}&iRTCy_' );
define( 'NONCE_KEY',        'Yk~<H|xm.W|b{;RK+0^?2Q.lIu@3KX`4/3[u!3NEu(%z<ziI#(yUKLUZgCVp_fc^' );
define( 'AUTH_SALT',        '(j]HBpPulQx#8*@Z3z0U@n!M?fA*r0;pWri%c,/-f3;0rJNzkME~xsu?OH3o<UK{' );
define( 'SECURE_AUTH_SALT', 'uMQ,h8S(ZwFx9RT*{YY.1PQQefZr-d@9t+F~LvU~tC+a@BJ&pp)jRUeSd{db$J#j' );
define( 'LOGGED_IN_SALT',   'D~Yp<j`$7%xH/8U _g.%i6fIe:K}-X?2<(uOKGgh!Kf_xLGu|E;Vf0GM2woUeIpW' );
define( 'NONCE_SALT',       'R@A#ua5:V?YWd<?;R3h<-?4@t73yZWb%R!gDS_-a:xbcVs!,n~:9#}YH!&Kx+Bj6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jsadfohoih_';

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
