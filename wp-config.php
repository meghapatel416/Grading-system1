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
define( 'DB_NAME', 'result' );

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
define( 'AUTH_KEY',         'o$0 $3Ldtx7/q*=p+EX(SU&fZ0EOJc>?h0QCYbN6KMKu=$8&+z0K-tV>A2Fu]hDH' );
define( 'SECURE_AUTH_KEY',  'Y>fq=#t?|OqqpO!kg}bIZ?NE7:0Pf$&ZWQ4@S%sDK<C}k6{jT<bu-bi2/K>AuKYy' );
define( 'LOGGED_IN_KEY',    '@tW_v1}M<4lfaESGI!%DNyeJ{,nKf-wR3:X|(ZWU1M;ptVI=jj>a(5`t[<7K,m@1' );
define( 'NONCE_KEY',        '59wQ<^$O-tLJgfa?Kxivyq9KRDk0F=;J`iayD `|L,twY53f.6Re&F$vTP>CjtOA' );
define( 'AUTH_SALT',        'Qx[*`G(f=4vP+)oSdT0@@`t.1X1m2Y@fYCN!`lXp*u#3daEUi9)`tB_I0UfGei:C' );
define( 'SECURE_AUTH_SALT', 'WMl<DK;B_S3q;YFsbe;G[? lA;;UARx+}v(^Zu-:7Jnfb57lccE=dJ%oGQ4_UQDJ' );
define( 'LOGGED_IN_SALT',   'vZY`E8|44rsdQOpid>ARg5r3s--sj-3foX+Y^M lsI|j^*&U4,?}TTpT92y`QT(n' );
define( 'NONCE_SALT',       'i#rmV8_lX:i1`B =p5SiH}.;1LpH7~Y[5TUiiis-L/nI|+(jnbI9VRRC7DSUS78#' );

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
