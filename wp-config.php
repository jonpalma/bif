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
define('DB_NAME', 'wp_bif');

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
define('AUTH_KEY',         '*Kb7m6bdn,Fyn7g12~RFYY>nq5q_]XR2TEuJa4qm{,br6HOs-=z#7ra|14:f8G59');
define('SECURE_AUTH_KEY',  'JF=CkkDJ%_$*oSU2np>t{.0t4O1fJaROd&ZDP_.iaTF9OrJ#v}]Z%/bNGxyi(kMf');
define('LOGGED_IN_KEY',    'Ld%)<N4oh~LzRWHe92gUkt9=!DNAEs6(m/q2w8b>0. $@3z3I)e~xC)@]i~#yZ.[');
define('NONCE_KEY',        'a(GL~6IH6YO!xF=rmq+1XI1y<[hRr^+jReHG3QQu<0;WgD6_wH2+n,XQ<*g;P>o>');
define('AUTH_SALT',        '+`EBQ{&33t;h@O37#$qU2lV(h}U`L2T*bZ.{J>dVn G,m$SD;ek:~=aoxx!c]Prv');
define('SECURE_AUTH_SALT', 'B[l&0T<1(_{{GUX7q@po2vKyk-Xp`+::jxQ_;*:x<EvF5YMnhJYj#dd!Z_qO&MPH');
define('LOGGED_IN_SALT',   '?CQoL?~5NrD|vm+5%8S5`qjakVWp|n2E$h+5RIJt*Ca)7|#YdGqx6yK&?{WE~m<P');
define('NONCE_SALT',       'SAKgf06=Ql@,K&8Md9O|9h:_HqayHZJ}bqO.&c8bG!M%a)~_&jcc^u4|@ytZ8cPD');

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
