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
define( 'DB_NAME', 'helloarman.github.io' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'G}JtkP-~Lx(!26&]%oe{sS{@=zoWyfW@&uV=y`:4+_V)wdvx7ZD`Ju4+Fst]RS6T' );
define( 'SECURE_AUTH_KEY',  't`in:8$,f*:klfJ/%;#W<(&r,DI.ZuCk~(nH -6W%D9sN_;#df`#6^_R~vf-2a=5' );
define( 'LOGGED_IN_KEY',    '3,eRfkuw(:K3 >tv~C2I+Yh1FN]Q;<tb}Et,!>Ek/<]]M5PcFm,,)cQVdQi)p(6T' );
define( 'NONCE_KEY',        'zr 02B6LrCuya)~Zyz0Y3;^NZrrY )3=2DY2QhCu7Z$&h[pO$Lu:[ET4yxwQi;<@' );
define( 'AUTH_SALT',        'ShO$,^6!>k&G$P`JBgTz~Pi#;2yV2LV<QW#YY):*SbV.$5Bbm7 7rW3&qe:Y66.J' );
define( 'SECURE_AUTH_SALT', 'd}^U)*>L:KR[mP&Rp4cvS`;~q4I*oQf~XVUL$hr!y}{YJy2)V1ED/;F_.;-2LV!H' );
define( 'LOGGED_IN_SALT',   'q%1??1eqr=$~yC81bytKV>A(3gUWr|:K_J(>F+)#AiOUk(@OfD-CO1n;E|!M.(*2' );
define( 'NONCE_SALT',       'rf%E5]aDQ K.>:CX^@ywaz-Yo1*f(+p0 MS0eiuI#h>A&&KX:i4f>@=GJtr`uLnb' );

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
