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
define( 'DB_USER', 'iharchi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppassword' );

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
define( 'AUTH_KEY',         '76E$k7Pn8[R-[Y,HJwhLDHjx.BWx8nq[q~v&$5[u,r[oW~E qC|C=L7As|v.2MAM' );
define( 'SECURE_AUTH_KEY',  '~/F@FcK:6sQ{pe#kkNlRC;9fG[GW;},4q}c^[N~y&sB7wM5 T.%8a,JCy!%sKrA:' );
define( 'LOGGED_IN_KEY',    'Lx|lZl2Y]|cb[}MD-pUEY_xUltNYRs+kkJ7n@^q|uROFdf/._U{~rR>GRMP8B?K8' );
define( 'NONCE_KEY',        '-5;%5vF0M?ohdW P9EJ6>nna7ZrTfV+QO5&0{)H4a/>R>WkasCd-vy ](f`)#?o;' );
define( 'AUTH_SALT',        'kPJOP@B_{_Z=FGkF>n5:e/KV_%?DqImHi)=%4IE 2@@HoT-ec0J3A(4XNrvI4u3|' );
define( 'SECURE_AUTH_SALT', 'h_T+92Mm;sW03#:Sz?=1m|3dzUAVsi}]0:u&9-;4j=H}1(JC!`9%*%Z:0XnVjWyO' );
define( 'LOGGED_IN_SALT',   'ct![YoQ8q$tHkaU/px=,O/:[+fj3Q5|8!:0,PIo/u!![%iOXbmBJJ*M%XE;;$T52' );
define( 'NONCE_SALT',       '!J{3h3Pk{J@T)PA?&;%7M=TuRX.SD]*A8~GI1<:2W[)f)=^p{`lpmQ-z@Ft`34fB' );

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
