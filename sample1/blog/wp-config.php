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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'pawpet');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cV,XzMOQNW=;-- zcos?z *d#Iae+meh#urO~u@Is|hL7&;uJSw(Ah/qyS829n{W');
define('SECURE_AUTH_KEY',  'qOaa1`.k{R~,hwpH@H;icCsZr/{tU*U@Z~l;OI73q/n^vLX]i<:*mq>GFJr5:^L/');
define('LOGGED_IN_KEY',    'n~G6anoRQT!0aA4_?sy#]~6(F#8OXi-#|h4h[%FjLnTqY993[},;~Qi|~^)xqN,}');
define('NONCE_KEY',        '+VQeyKQsB0t1yw#LqHif m&{ezO@?I{[i)vl~Nb-X<cgdpT^5[eS;ro%=48XHhEU');
define('AUTH_SALT',        '1Mw^Z#:H{Zl-bOAG@u~Z9HX*jvYhWxzV35b1]CMBd(=6p]jP e8RTqi&b+#QX!XH');
define('SECURE_AUTH_SALT', 'P=FP+[Id?z2a/Q_:&sHBJCw|P^# /mAa~BFK/w#U}Cx0).]c`@yD$%nI}Cxl];]S');
define('LOGGED_IN_SALT',   'aSp#0TlvX:,.1,~[:9tGlhP|-Dc{ :;]cEq-pcJ))F.Tv/o@ukk04pwh?WS[&RU.');
define('NONCE_SALT',       '7P-;R<I_$fBc5{R2wL`;HR%(P*2yL<knK5$x]+Wkk>{@k) L7Ca(< E^:m<[d|X}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
