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
define( 'DB_NAME', 'epiz_23856173_lesavoiracademy' );

/** MySQL database username */
define( 'DB_USER', 'epiz_23856173' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Nd9GwJDVp' );

/** MySQL hostname */
define( 'DB_HOST', 'sql112.epizy.com' );

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
define( 'AUTH_KEY',         '3dc49=Y>[*>Nuud,ZQQM-5aXU1r^h0F2|Dr}m_9p>_Q3KY*yA=df)jz)EJ2uy?;O' );
define( 'SECURE_AUTH_KEY',  '/VI#NN~tJD}<vj 83=3gOQyO*y!`&, mjUVr<1MJFF{l2]L>  4wP`X{d)$Z84cK' );
define( 'LOGGED_IN_KEY',    'dtfT@F_!B@fZ,Tc^!O-b?:SIWSKCd,Crcx9kD{(iVT><r1[BgXon8^<m{HC-`i;t' );
define( 'NONCE_KEY',        'ZtEdC^Z KdXCkDT]=i]X^HxMJ4L W=7AY3j?/n%/MxBP&9$UuiT|5/5hz5U)gL A' );
define( 'AUTH_SALT',        'mfmMflot?+B|To;B59l^,=7,:Z6+x_u3wpJ]Tar*#]d-BjRlUc.UxuGGOM#0@.8}' );
define( 'SECURE_AUTH_SALT', '0~Qr./J0#Y@:OQ z& H/X}is*2r|L9kp6o*xZGPs{%k$nX+03km8|?%JkyU9+=1^' );
define( 'LOGGED_IN_SALT',   'rE8@P_z|K6Z-L8fXxXw0 Rq9l4c}}{guhe(}LO>$Z &UnEE7WR|BXtG5o>uwmhp1' );
define( 'NONCE_SALT',       '7mk8p^kLGy9L$so@|T=lf#m?uopN,7=k0g?P yOc4z 5M<[+#URr^ddj$+H7j])b' );

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
