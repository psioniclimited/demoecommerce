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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demoecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'S&*xWk<3d#5-q(ec~f5)agr9|cT;|qs-x^]=H3,/jmM}[+V^vH=Bh  DKjs]I.>c' );
define( 'SECURE_AUTH_KEY',  'CM3VlK8Y|j~&HzF+(k^E@*Js.W{S_iSoD?GBCG_6HLK~-iWZX`I-4b3cQr{WH)?t' );
define( 'LOGGED_IN_KEY',    '+I^ (o>FIyMe0uEACH_%3QxB(C NxpWSNzFq;e%[-XXpY9fP&<2<NxFl;pc)-E*`' );
define( 'NONCE_KEY',        '<zyw{r/NEvF/<s`VR7fZ2mjtzLQv^;WGxqh.`$Y/acZXlY!1zwWQpIsxI+.gt%fx' );
define( 'AUTH_SALT',        'RQ<,3#a#sPgWXli$p8%c%Z997x=4l /kD:^S(xm/(@ClL+qM!5,X7t.C7cV]%qOa' );
define( 'SECURE_AUTH_SALT', '6&;3G`iY|>*XcO9mb(g2`8!k=-#mQ-Y jI`eP_[Hj9Dyjp!]/>Q5MDveqm-?q1-q' );
define( 'LOGGED_IN_SALT',   'zCzF&thbkD#WA)M1)1f%`$%Sbd./<FFZpW@)YhT+&%s6`c#<bM?SQ9u:Og&CaVO ' );
define( 'NONCE_SALT',       '~Tx*0R*e[;mpqe@}huM0Zqfn_9-?P=<-/*,aVB+Gp=qjZWO%@wQ+C=)E9NP P=Jn' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
