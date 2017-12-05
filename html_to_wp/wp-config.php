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
define('DB_NAME', 'html_wp');

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
define('AUTH_KEY',         ',ki/$qMGLCQYaiP3CT~uY8=gc_2%X[uX 664fuBt`^ZtbGS`{/S`pk|S0sc6.YQk');
define('SECURE_AUTH_KEY',  'Z#}X9za[6k[Ky]]{.DkR6Lg*}}{(d/> j%(e 0#6o*z0vNZBN|z>[nY*$CQEJvxL');
define('LOGGED_IN_KEY',    '0+Gs%!DZJg7~fu4 |K$+43[r1fxws&.LRr{]xMzChL`$xK{ie_vCl0cw^>O7E[nL');
define('NONCE_KEY',        'f;I)9,_Z$-dG:nwa- eI9Y}]lzN{t~TG3p.1p0a:I,-_px`Lu9e;6=6U!2K0Nj%k');
define('AUTH_SALT',        'y#4p<TQ^81P@g&h9q9k!~F-BLA~u|wW4}:[y.Jg280QeJHN {jNHsXE3N1k-kycD');
define('SECURE_AUTH_SALT', 'u:|RG3J>6W4@tim$&v{0gy<|IvN/+C>OfrFFL:_T-z0;V-v=VLy]+8!kEB28a?8{');
define('LOGGED_IN_SALT',   ']yR5e!hqDC`Dkt~Uk5WZvR8d1A7zSi|#Zi$<j [9+dXtSw|u#v@@+9=1dkr;X:uF');
define('NONCE_SALT',       'b#eI).0hc[5xr;qO+T*=no5ro55{~fIqbX?[>f2^ljwh@TjI}X(K9qE!.g-<u$Ye');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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

define( 'CONCATENATE_SCRIPTS', false );
