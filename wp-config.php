<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         '-e08.w^Ju|=}PvRE9Pm|]uN&(V:A!IJpKF4w`tD*[X|96())1;c5mPF+fGH|.43m' );
define( 'SECURE_AUTH_KEY',  '/oh~?ax.?hmQ=zmg?5!%is,8g++6*lYX`2qp59&;vT?i;NKXSQi$Gdndb>z1UPS|' );
define( 'LOGGED_IN_KEY',    'ZQ4vXHSc6);!iOr@qG|u(;ql_C*cgT% $ysaW>$Zt@5Eg=4s_{@pL({>:;b8|+)t' );
define( 'NONCE_KEY',        '%ft=.Z2]R-h,<W:VLjw;@6wkPVif4I C&AWFjGf5PrIDqW)!(rgYf_jnq1|+15Ss' );
define( 'AUTH_SALT',        '+Z-lqb[*t|cSeQD@AkEUUUG!vYq@y6P!e/ecf_gumTA]h1(*t[+qz;U{UnS_NfT.' );
define( 'SECURE_AUTH_SALT', 'viq25K-2xm!?W`[]2x&))ZP~fE]`,@K<JnCdul <&!CC9eu8+s2<m$Dgv]`{%CQ(' );
define( 'LOGGED_IN_SALT',   'eI@,pm#v7b}ZQ|d^:n)Hbg@Hl4^:Kgr56bSZXTR&9cq(dx2|rWqi:d4Td]z<|aG{' );
define( 'NONCE_SALT',       '7w$aK,l?*^JU.Q0w1N>Htikc]DF%g6D(+lM)eU~g98:Z`Lc7zXw/zm;m~xj+_KXw' );

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
