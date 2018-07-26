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
define('DB_NAME', 'hackathon');

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
define('AUTH_KEY',         '##EU^D&_aW.F4F$)0NCelWxzbi!W`->,bVpIszDg }kY<b|x9;u4Q7UJjzvP!*x:');
define('SECURE_AUTH_KEY',  '^0bn~2}dQe8fsHv lsiM@ _@ $FDF%/j!hiZ:WkLJO:*o!7 ~WkKqby[DF0a0j6A');
define('LOGGED_IN_KEY',    '/XLHG)I^d.>Ea(*Nh`>^eI%.MFuYS!|B0$BNm2n>(zU8|78Sk[lTwBig@XqkyNfU');
define('NONCE_KEY',        '>wTV-|Aj>}p5)wznlEXZiO{lZyYpot|~`C$=z6f!!>[#yq7BY3;M3maNo.1N6P*J');
define('AUTH_SALT',        'tc~&LoumI`xDF`)sHZ1W.!f)%YTfw%?V+Z#mr8k;6[:%_Tv:|T->@$WGwsw-mjTh');
define('SECURE_AUTH_SALT', 'X(FJ0O^4sF8F0@;[D9{o>U0c HZ7E:$^4V&.?4FXRB*v3DB9d>2I:>g~_9S4t:EL');
define('LOGGED_IN_SALT',   'U^rE!Kq9_.F6!HQ5i3((=09!}43-#<oh=q:y/c|l5o/j,E1>jA@$7Nbe_.h>iDae');
define('NONCE_SALT',       '@?}y,co,#O|td[/+h/=B.;gI;uJCqSpNM4vPYqFy&^JO(N#6(0DZ~=(FRtVHi_QP');

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
