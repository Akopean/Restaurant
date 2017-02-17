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
define('DB_NAME', 'restaurant');

/** MySQL database username */
define('DB_USER', 'restaurant');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'mysql://mysql:3306/');

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
define('AUTH_KEY',         'L^w80=#m)~,0o=o-3lICJ_[8g5Kx6-g`=NDq/6kpw[M[hZs$f*;@z]-n8?`yIM_+');
define('SECURE_AUTH_KEY',  ';2$Y44KRhF|~f0B*Q+.HzsC@.vKe#]<td%ZL~;n*F%w}TjA~KST-dr-}9*NoW~{K');
define('LOGGED_IN_KEY',    'rkGz(R.d8|PGcgn=f`nkH1])JEC@OmdD]Kj+CPbd} ^}:APA>PSUI+Bln3MP(Od ');
define('NONCE_KEY',        'd,Y>B{KiEDSO^Ble?R/%H+iIS^RvQ 6I7_ox.hnL*y6dmz~bWovCh#DSIgnCso *');
define('AUTH_SALT',        '^f ,1QmxetF^r+tL,N=Tc,|@|S^GEm75XK}3KL>A`F=8(b)anX3~bw(b-//Mteg(');
define('SECURE_AUTH_SALT', '{&=sp3Ei)iI{AI)k?Qk[.sQ`h~]098z<$2zAN7Lr5VT298G3WFrFje0vFVZ()+C?');
define('LOGGED_IN_SALT',   '`h]FnpLf`r0T+.w!Vl&9Db/-e+Lz7D(!:jd#Cx7b#qeA,}}CSCATVY6{(YF-9+aj');
define('NONCE_SALT',       'k.KNKDY6hE0ZsG:h1RNb{pH$eAdr-(q,YYSqU^TX>~9M@? WaMg OcPzY28WA#JC');

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
