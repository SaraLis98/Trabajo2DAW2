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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'daw2CMSGym' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTHKEY',         'P}-?bsLQSV!WLGH$]}Z*Y#F6bVmPP;I8}#Vk=F^sl.o+8W-/6v9bb8wI@3~2?i[');
define('SECURE_AUTHKEY',  'G>OYmOx+cB[^i0C{$=QB+;^4|.+tvakC6Bn@9M+Mh:z&cIUaWl0Ry$JU~C5(jD');
define('LOGGED_IN_KEY',    '%Wg,V|{qE<nn^xK&^TJYK|XzU7F7+eGVOaj)lPcT09NoS%(q@)BRR]eY1o}0-VH');
define('NONCEKEY',        '<~@n9+Tti%KdElQrzDGWX5T,ZSQ88D|)<w:.-i$V<&|-cs&cStG%foxom)>-W');
define('AUTH_SALT',        '+[F1gRt@;PZm@ZK3QP~[GYpe3>pi4AF|X?B?}wV+)tVFU~x{a+]]~=NBbwNR.zR-');
define('SECURE_AUTH_SALT', 'q4rn+uejWoRxYU$SBRT%L_L9Rs+lb U}eG^5,ClF=R28 x&Ov,i<f,D[+tb9yZ');
define('LOGGED_IN_SALT',   '^v+gS;8,i/5BT2-]0;Y+wVL%k!-omAU$>49f4p%sv$&N+O>;7T(2A!m|2C2x');
define('NONCE_SALT',       's+T,@DR!w>)QkM>p6>[H$V;>%&h$tn+AX}fOtt!/-!X+9+X2AYpI@gjG$P{s+6');

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
