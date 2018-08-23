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
define('DB_NAME', 'seo');

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
define('AUTH_KEY',         'FN&0Nz{6}=YQP l%~y(qufYH%soFyeB&-/F[;2/I be^fx[yVq,Ie:+qw,Vfj?g]');
define('SECURE_AUTH_KEY',  'on{_]<9Xx2qmsIe<7Bu $Gton`9IJgkb.8meW8QaZ4c>;21xpMKO&OQu[;P^mWL~');
define('LOGGED_IN_KEY',    'oM9EYW~s/ dO/re(i9%Cgn1{3?[S[}-8|x#C@%AKZS/~55p/vdzV}f0c8;t]Sv9#');
define('NONCE_KEY',        'JG~Hd71b5(Uf+2S@bj$tJ2%sw%OE1D`U,NtXA3d :We:s?dn{.E1`i)`0_tC@y2A');
define('AUTH_SALT',        '=xK`CE mPQ_M#OZ31t6uo.&OtWG:>y+LtQ^$,=T={Ln[R+}xc;&3lZJF<K?YBGK&');
define('SECURE_AUTH_SALT', 'L67)O[NsB)h{gr7.p79`udv#~9xZ$%O^D7WhLvo%nN++!y=~JCBQ|+s*g=oY7!)@');
define('LOGGED_IN_SALT',   '_4SQ:x;1#gc#@1%1rp1HO4b4c%_Of]p~v!Q.hF9/aHH-Q$|}3-n[T9F-L_f-mJf%');
define('NONCE_SALT',       '~Iz*Reoifcj/xDHu `csR;>;hDk+QT662C(;~?C.z1J,dizmu[0G`8o7/9P27n9)');

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
