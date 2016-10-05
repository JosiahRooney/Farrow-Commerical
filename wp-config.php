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
define('DB_NAME', 'farrow_commercial');

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
define('AUTH_KEY',         'zG#kVG+p]M45?Q=u`Wxlf^UZ^q[n>C B66UmwE~7X6C{?0#9Y^v?#gegHI@wOl{l');
define('SECURE_AUTH_KEY',  '3K($iT^WKSQM*SW]@t5`f.6Drt|#/_n6l*jdb{<_MJ-v0~JT ikFC2z6Yf4%]$pM');
define('LOGGED_IN_KEY',    'P|:5!Ae>z{ZYR@VX7W{vWs0]YKh2$gGp._u;]8$i)IJ)RazZgf1%P}ma|v:oRk<p');
define('NONCE_KEY',        'v:EH&n0NwLhB1u,5::9/a,70-pr}N2. *ct$8Np-B|||qxq$L.JP_?WcW]vows?K');
define('AUTH_SALT',        'sni,EvBf(~>ti3vzLhsr0z_g6S((]`_/oLhQ `.PwY^T%n0$l}]CmkrNK5FaH4x#');
define('SECURE_AUTH_SALT', 'i>Jdw z}dH@f-^x!f{.x/+wMopithYqkxqGZM@ku,D)h,I4Rxp=In]3k7>MiO;7F');
define('LOGGED_IN_SALT',   '<gbJ(Tk%3oK^PmgbuO?Rsm}y]%w~a mPy{=Mvl>-5mc<~}gQ9j,l/LIf0WjEowl-');
define('NONCE_SALT',       'H]nI3;!|$2*9HL96C*q(%J!Xd;n*.`V{ki8gpI2Q/=j&M-op:|8E%>F/*LWi.kYG');

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
