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
define( 'DB_NAME', 'archemarket' );

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
define( 'AUTH_KEY',         'OLQl`i*FMXWEfqEK /y);>T3`d}+O?G:[qM~0)=@KTS%TMy@1%=m2.Aq${KWXoba' );
define( 'SECURE_AUTH_KEY',  '^9Fn*-FodGZMRZTCUV)i=TD{&-6~Q6&8MsQr~fZel)X-r-:xxYFi].m9J}@AI+mp' );
define( 'LOGGED_IN_KEY',    ']LKP5IEpNis~Q!Dvlu^$|N1o$3q4`c~D].pTmD]32&-QP3h2 R>dzkDXPdY+vi*n' );
define( 'NONCE_KEY',        'Jrlv$Z9DKfoV`MC-AXsxKjzP8(^tXz=qCvHo< k0<C(NemL*Fa fT`P;WQrd}n@5' );
define( 'AUTH_SALT',        '5wAyBfOwFG$`j$s0f1-/2BoE>E[|@Ipo`+GCmLw9CJsX]^@6oY|{z$Y[N;v6xM<>' );
define( 'SECURE_AUTH_SALT', '>+:<NAKY^L>7lVAAS]V+4`nCq%O-E_>s4^,6D]j}edx2;d]t)aT$Jsv}GFx U>N%' );
define( 'LOGGED_IN_SALT',   '9~Zg3 z@B$&oWVm2P7]]kzdPHvTg&e&a:vkCB3y%mXg(5 8p6?pr#>GR<or6UUqj' );
define( 'NONCE_SALT',       '*N_/nS0F`rMUO:qZRGQs/l]ivVr cB3=aUK/uHEr4vmTratww|K6<uGfzeHE_^vl' );

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
