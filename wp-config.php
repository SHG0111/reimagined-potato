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
define('DB_NAME', 'shahenda');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'x,8 G#3Z}HV&gX2>Qxm[Wg([+7tX0e# O$M3>W rLiVG0CP/*+a[ER;U)lOkdZSV');
define('SECURE_AUTH_KEY',  ' C`%/;K.F{^?d$x}#o6k;|twxYZ4eO>Irx:$mvFe7O6LA3:LN3xMG(LKFjF8ysSs');
define('LOGGED_IN_KEY',    '8<40FR>JR_P?0.cnN3`12y`b?OYId{ )IRt:}c.NQ3I%:R{h8R6 }!pbBENR+ZZA');
define('NONCE_KEY',        ' i%tJX!}9ozU_8G{q|^jjb-G(b 4m!<T]49,AOuF/c!fP9Hq~F$V;RU<cy=RI<cD');
define('AUTH_SALT',        '[@qL&q)*(^WqQf~]A68iOMrXQWmjOgjb]$@0{hVVKei4BzxR >;6LQVgf<A+}@q|');
define('SECURE_AUTH_SALT', 'u,]H3oTp=x:Gj1k>f})s-j>-sNxuG$sesnchD&.@^zXB8eicr*Wb/;=R[3!:*]5G');
define('LOGGED_IN_SALT',   'dQk:x.UW4s3,cnQ.f2%!o8P7>Zd~6+ua>Ys/;IfT4d,VRy_e qs0a8Y/wn}^M`V!');
define('NONCE_SALT',       'Cv,dT{Ykop4D!n=,u=Wdm?((o-9B,2^_y=zX,$g,#5<C83%*.9zP9-)6N/=RK`7;');

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
