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
define('DB_NAME', 'barbplusdave');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<:.PySbd%BJECab]lS.xCM}@m07$xK/0CaGRJ296B>QYG:Tk`LvH4]Gd%TmpMcbM');
define('SECURE_AUTH_KEY',  'W=q`dS`}j&KGxxP/=Ig1b{z<K>s!w4bMfc 9y/s5}6SjDb5*?0Q|k41e[fGwjW]v');
define('LOGGED_IN_KEY',    '^6%<{`i!vphou1@%rjh51WH/YLgM,`]?bSmPuQAUSi~&OEp=_Wg _~>re?=mFxU|');
define('NONCE_KEY',        'g#YCQiVYJL(KU;(8zIHWU?1H ow%Fje?v]me}gd_tK?GXOJGqd!SUzaVq1<fC4oK');
define('AUTH_SALT',        'p3c[%vP5<~RyWOrU$aa zy6qwt~b%d43Be)&=apG3RFShzFE$ &~RbFbW<{98`Rn');
define('SECURE_AUTH_SALT', 'PM-m|^8 >?X4)8,rm/OJ4*k6RR2%;z+n8h66}1]^o,`.H>5m;}S0bpTy#XeKm-LK');
define('LOGGED_IN_SALT',   '~^b0{kKnr|PXyN+rua+-#O,AGkZI|WImE#FFP^`8hT/z{^1El9(4O^Nh?j[x8}(2');
define('NONCE_SALT',       'Y/w$5T3*`p*[b$J(yQL(?9&J!L-k2>CVJ|X8Ua!C,995xxBjyu)ULQwvc)Ldq(`2');

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
