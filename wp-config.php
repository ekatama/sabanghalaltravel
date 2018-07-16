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
define('DB_NAME', 'sabanghalaltravel');

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
define('AUTH_KEY',         'zZZg<lj.0[uqM6nsa MY1$Vx+oNv>8Hg(k,-m@Upm@y?d-mEG8?8I5m^hiU5oajf');
define('SECURE_AUTH_KEY',  'Ar5_`YS4-.nD#>N]c56hFp=dH64Bo@cfh1!w@zBF?T@J}u1tE`FY:_XL*M|#YPb~');
define('LOGGED_IN_KEY',    ':d@gKV7f0]vbz VRv! o3e>>pY]w@;[m6Y.px>l9j)`>Y-OZ.g wy1c<#q8H;]&G');
define('NONCE_KEY',        'f({`@4o!edCq?=aFtA8ug].>pO<w+FwAV1Q<w,K1<?-^`-c5Qhf2o9zI+k`s6`,;');
define('AUTH_SALT',        ',xyFUPVTZu_Owy.BNF^j<IIx!RLciL!)L[j!+tOu$mlOc|h_<e$rZk4ywGiOS0(b');
define('SECURE_AUTH_SALT', 'Lb#uKEQmDev!&1h$TTxAZ1Z>*Hu|W=sek]2&=0LzN2l.VtgjzOe3uzTnf<X^`Pkw');
define('LOGGED_IN_SALT',   's~D9^<qE4pupu$43sgI79!cx0jFT?K!#UKxkB6mnUqBDWGTtLzkH]f9<jk@Ic[Ko');
define('NONCE_SALT',       'P%,BVw??~^YOf2.L9_CIsA-2KPX$6M-KZN0HE2IF&]E]=~ntA*KQ5WLrL nrsJ2v');

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
