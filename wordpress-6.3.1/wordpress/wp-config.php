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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         'FvpkCD)]i}en*G/M /E,G-L6IZ b`L+ZKX*q8X=D~w&rRb}1lP6k;2|Jd0@bj|VH' );
define( 'SECURE_AUTH_KEY',  'p<^V}xg&t65D[#iG+,Ld|gLjSjp? 3x3`|/_gUk?hG).p+N=Xi3?OKCkp$k9R,%r' );
define( 'LOGGED_IN_KEY',    '%*r0/8YO!Y(`e[M}%J]C?kgq40[G$*f2p~B@%eEzZK9cn){p!m7TtQeuO& e+:uw' );
define( 'NONCE_KEY',        'm_+H$8Yn;.V$OB1Yez;c}?)hIKIh,.:|nE+fU2c?Z<]%NpVAwH.o<U~Sv(`P}H*2' );
define( 'AUTH_SALT',        '/~Cjot!w8kECb ButU@)HOt~aiu(5hep<k%h;2v#K%62&c8wTV<a>@5 87Fj)~v)' );
define( 'SECURE_AUTH_SALT', 'N~.@BxuWG}I2]U~PHDoe-|yiP$403*62^N&m0s)ZF}3jY-+>@PGfotE)`@5kso;G' );
define( 'LOGGED_IN_SALT',   'd$_*t#.`heh56FNW3D/IVBfHF{}s>`XQX&.3oujS./hDsX{tT0~LX#!S(b0{RKQ0' );
define( 'NONCE_SALT',       'xQ^ Y~LB9Vwh,x9U;5vr]gXz7|hz@xv9Dw:33S6VH#Al5F&3R`cpD,m Iety.WN%' );

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
