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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'G5$E}J14 kX@n$L*7O.-QXBcUE.!]>7q$JB69!}`MdYtw]N>r%x~qq>~FnPo2X0p' );
define( 'SECURE_AUTH_KEY',  'Vs#:lRBZVW}Yg[m4[^mk;Bk<t;x#Zb#d0vS]9n+&jklM?TA!5b`sll}.gIML4@WU' );
define( 'LOGGED_IN_KEY',    'JEK+KAg|p CS8uL1*-Y=O&E_EI0RVsM28BtZv6bzmmSm}Tj`vU,t[st%l,OR7Fa/' );
define( 'NONCE_KEY',        'DkYZ4p5})$}8y@rPypN+y8r^6SQ%=|DP;@gRO[n,Dy?`is1lT fj499f$#Ii34*9' );
define( 'AUTH_SALT',        'ANzjh9]Xc.H5YhId1DI-21GyfMxkT@^%_V-S~Esv|s`e+?~aYP+ai<17OrlpyRcc' );
define( 'SECURE_AUTH_SALT', 'F<qShU,,WwNOcRIO~GArVH.`fpM:Nt;CMgcfxPfMZH/bvlvk}ti/Hb@[A,LgKQ8n' );
define( 'LOGGED_IN_SALT',   ':%Zy5hu-%!~ywFuf3Irs|J-JrYCa9?Z[9tEbwh@y(yR7BR63ln1DU<LY7 </KvY`' );
define( 'NONCE_SALT',       '%b~I@n%_C^2IUG,*N7V)+6&)#JbLlsl]JjRVN,~.AzTFdLi*$|,`3SUP7x`DLX@b' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
