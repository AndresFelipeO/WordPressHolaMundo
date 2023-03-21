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
define( 'AUTH_KEY',         ':/})J8W:N~9*1R$v|bdIMTnLG,e(uSx4m>OoXuI$CDNz#<Y-c`x>F8qCsr1=c&;d' );
define( 'SECURE_AUTH_KEY',  '5v(rJ.am_EKUu(3HI 0S1=&^4E@ T+MwgX1|5/+Jo?+P?W`@#7FmK6dw9`9PS `z' );
define( 'LOGGED_IN_KEY',    '1%4:Q%2bQIbB]w`%:$}r#8UXK)B?@W3*co)UW6ltSwG}@HT7in^J|Um!0<SOe;4B' );
define( 'NONCE_KEY',        'OB-!  &dWMxo1;#<L>5n?2=X~6J|50zioO:byPH&<1oQ($zM(/YS~[AM}hKHAU q' );
define( 'AUTH_SALT',        'LHCRpw%j-F<?2I3@mvpE1Hl|T|En(^2twU1Se_j{b]-s-Cc-Rk/7k&:_8m9LeT3T' );
define( 'SECURE_AUTH_SALT', ',WCsD<l[g|rr,d.uM^)DBzC-mv-{}|`>Ohb[rU#Pvc(<qPR*x>>UP%l:q)3);+/&' );
define( 'LOGGED_IN_SALT',   '6J/cBf}jes rOYZ{`}bnZ4Z!m=cN;&sA^C@4BA%EciW),Z[X{ ,3x*Z7~x9T=_lc' );
define( 'NONCE_SALT',       '{5QW%I+{( y]o.SLEIq|nvv%[t%.|ms,WO^e7O(yqZJ$BH=XbEV8}e**TkI@1g^V' );

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

