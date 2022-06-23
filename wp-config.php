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
define( 'DB_NAME', 'vpstest' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'J(OUZ(o$5t]d!I^4#+(LCvLbAh&FrS`V(c3,}V(,SP2,T3dz^hT;t}4|y]mISy&u' );
define( 'SECURE_AUTH_KEY',  '3H|NNEJ-UMPK<tZJx=9%5Wlz&3_*>?Ycopw@tDIB*iw_:?=>4GMvsqMF. =:2nd@' );
define( 'LOGGED_IN_KEY',    '#fcn4g@Ssxrzhky9L@l$7azRI1#S{rtLSN!LQ@Y2~}J+KE[CdfVZJ >+U6tCIR`F' );
define( 'NONCE_KEY',        '|jCG?oCKdH<OE#7sw4 yCJ<{:4=:&dkz%k$5V5q! ZsK(A/#gPE59%Iw`BBY499[' );
define( 'AUTH_SALT',        'q= >d1fQG*SaK~zq#q?1vi`gqvNW*|19^VR0l>zH*c$67B 8dqrV*Y@^d_sd(ydm' );
define( 'SECURE_AUTH_SALT', 'O0t&YiJ74[?*rR`xVYQ@Y{r7h6`/<NFd6 b$/ !yC4e*rtmpPo&baT  R}ZwI}HK' );
define( 'LOGGED_IN_SALT',   '%^HB[*[K9XQoc<r@yF3TE~E&(q`BYmRws,k9YJ7>Wd2iW:87+.~.qt;*N$HR*9;K' );
define( 'NONCE_SALT',       'CVNNF+{yoOK,fB9+@3O[1-|otJOl+}4wU|J*<3pHn$n QWjoj?r(ppav`2h>Uat(' );

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
