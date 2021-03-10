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
define( 'DB_NAME', 'hragency' );

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
define( 'AUTH_KEY',         'q*t8Avol}TJ&~oIZ<<ft7]I$eV*0ck_<6 8b~wA>g@&gz6esg,k|]KvdoUrK!Pdl' );
define( 'SECURE_AUTH_KEY',  'A%M~ZhquRX,tSuE*/ sCk[Y;wlc]SI8$h0,4F_~5}p)[YQ[lvfa;/r5T5pJ7Pdyw' );
define( 'LOGGED_IN_KEY',    'U&pN%F^43N/]~gMr{D FEXN>T]XZ1HQOtSO`cO-+{4WsGcX98fM@-@$Hu*/UAw=k' );
define( 'NONCE_KEY',        'h<WV[xDQ0djoVcwlqkViO*@%7G1Z 3@IjpT>Q8@NJ_V3^<l@+/lf@;?);7{wWzU6' );
define( 'AUTH_SALT',        '[;LV.!$E<ZSBh4k-uqRHs#W@We!I~Z_^VNH-m%_{119`FNLrZcA b*k(wGw&hD@/' );
define( 'SECURE_AUTH_SALT', 'gM0]qV2smN.:>#/S^Uzz*MTG8gXVXhR =`?pI;Df (4y$19q]:j!r}85)+2`6leu' );
define( 'LOGGED_IN_SALT',   'XJh=97T!cd8q()[T;:yg4Xa0<Cx-_n3I|FHXbOtU/zrVq,~!@Pjzv/vsTGlW0{.9' );
define( 'NONCE_SALT',       'x+Hua~MbeF?Wj`10UV4$IT65F(~Q!hL:,*t_Z8.IU6C{1J:SEt`|I+kt0I.SZm>=' );

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
