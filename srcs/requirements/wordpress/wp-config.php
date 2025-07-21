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
define( 'DB_NAME', 'db' );

/** MySQL database rootname */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all roots to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '[WlxC]+GTCqEfh+m}2ab.;h:>Paq+1nSsg |!5QyM@ek&uD~y|4#]j*k}}C!JV4g');
define('SECURE_AUTH_KEY',  'H=M+:/GSqj<YJ/lFu!Odgj`%kDe4 xG9|2jsYQ#]O>$om>*f[+V>EkT#?t2saS9X');
define('LOGGED_IN_KEY',    'jET{~KRwNr|5W K+|<b.nUd{]OPMHzipiJx=`|RQ{}9 #slV8B+sIqcJwvz`zPe8');
define('NONCE_KEY',        'g2~#%+C>PnyVm:q:U;t|j>dKHa8w/W2wWSD%^z-W-Y^^wQxW?V.n9nNb|r;+6Q|%');
define('AUTH_SALT',        '`/7-*!/e/N-CWaKV}+rKC@`G{[Fl6L1qE]k_7F&O0_#=d E?!ITtteH.Tw#F+5Ss');
define('SECURE_AUTH_SALT', 'B^.:{kb2Bf9211|jl14aw;!~>},of2u,z?r>ioyN5-[_>^/@60Hk1_+uxd#Y$:O|');
define('LOGGED_IN_SALT',   'G}+2hl}cV$u;_le#5aQnUekFRZ#t|TPe4(#*3TO5tNb-BYNpq2c!>P+XPpE1{*ou');
define('NONCE_SALT',       'fNt^v#npi6$;[#4ERj46?D$).,qbdF(-n]+tD{3,Q+o0r.<hm80{}QL,IP=b5&cE');
// define( 'WP_REDIS_HOST', 'redis' );
// define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>