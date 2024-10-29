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
define( 'DB_NAME', 'resolve' );

/** Database username */
define( 'DB_USER', 'lesnar' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'DAh%^<2}9MYjf7`4.9I9[U+xp&[,N_<86v~P$!b8RPyJ#el*ApREgYO7ToZI5`w|' );
define( 'SECURE_AUTH_KEY',  'T h`o|Y>%3Wim87Q<h6Ztzqor4ny%5UBml2u0q7U?_r@8:EGl^HKf^Qh#`[>I8No' );
define( 'LOGGED_IN_KEY',    'RoPM /wlz)m, <Mb=|~hZwb,#x~?Pz`>k)a`5d;a*=XjxQ3MVtTN1}veKt^A]+FE' );
define( 'NONCE_KEY',        '=W>,e18~z`UL`=$$PFMSn|@P@qu^xmYb_|)^URQvJyT#@ItJoTkXh:2kw8j3mN9C' );
define( 'AUTH_SALT',        'W4WI[|a_yhdDK|#8Cw:.NviZ,C4Wbo5<4z2gJ)3ZJ|-foJKVQq$:YG;5EYjHvDU5' );
define( 'SECURE_AUTH_SALT', ')_ 2YR&BxHwDEct6Pzty;%-xSM4NDHygnJ>ISN 5Tp$Of34ppf*LxXo_qFl*kN8y' );
define( 'LOGGED_IN_SALT',   'Z:x7Ie]#-#fp8?kqh!(XAV$u71T/CKO!cpqDoqN`zuB C ,/tAqVP:|`{j:~=TzY' );
define( 'NONCE_SALT',       'R>Ql_^bV4*YiW9}38FxG[B2NEE]XSr5Ct*tRkkX.r<]B`a>]iVpLu)qwd+V:|)M*' );

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
