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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arkamrizwan_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~ZetHrV6,7[n;Or(Txxu.[gHY!X1n>&J1]$XOa2<;!W_6jb9zju.{c:ii0_`Cv5k' );
define( 'SECURE_AUTH_KEY',  '4L@e});dbf$l&AD*#po-oe-iL: ZJoL*xHGj!b*swA(eB&{iP2!q,nq(Z!X{C<nu' );
define( 'LOGGED_IN_KEY',    '4nf7OJaL6GY~{QRCk&`i>#$ICm]?W:V&BJVe|-{Kz7JnVUr0II_nXT7fDSA%<GMv' );
define( 'NONCE_KEY',        '9):aO]0vXMuS6Xgzdfvw>7pG8_N>}6)$by!`XJ*WF#bMoZ$Yo?O:hXANzp!a] c8' );
define( 'AUTH_SALT',        'HHql>PHmT@_UI;rcB|BCy>YadR9oz/F%Hk/D#`q4MDw;-${ pYt8%uR1?kASEQxG' );
define( 'SECURE_AUTH_SALT', 'tV[>1mbD{hedEH^dB]qNWF+RvTU(NwK%-ujK.!~H_O%F7hh`ok`XX:.2Vp_@b)rT' );
define( 'LOGGED_IN_SALT',   '3xA.gd*qK +##d6)N@d32f?;~e>~75fJ.?9:sX?>;I*wq0<|*$FJ?l62>~KD0uI~' );
define( 'NONCE_SALT',       'A8-%H>Dp)hn:#=mc%t6$r&U.XWl{JPcDh2dg;Q_HC r.Mms*8v9}>lP@^^/|>nNS' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
