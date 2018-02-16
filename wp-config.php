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
define('DB_NAME', 'db64444_jf');

/** MySQL database username */
define('DB_USER', '1clk_wp_mv2qKW4');

/** MySQL database password */
define('DB_PASSWORD', '7t5Cr76r');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'QO2WpnT3 7ammx4tX rTwRefh1 xXcUMccY 6RkKau3e');
define('SECURE_AUTH_KEY',  'IDmbQZPg 4pWXQfVP kP7MDJMa S6CCuhep TqzHwDfr');
define('LOGGED_IN_KEY',    '5sbNLrJb InyH28wI sTlK64xi MsbL8etC NnmvZvLh');
define('NONCE_KEY',        'wEwPlQoc DLVfMTmf bfxjUz1D lqgmxeOa Rj8y7QbL');
define('AUTH_SALT',        'oZlKIumq zoAWZo4L GI1nxfPv N57muHpS WzqKaGHf');
define('SECURE_AUTH_SALT', 'TvXPEeda m8Md8FOQ syNJli45 NDAYdNBA fjscRH8U');
define('LOGGED_IN_SALT',   'U5WXSE2J 86RSZrKI M5rU1xqh EUkiQC6w rCibEYSZ');
define('NONCE_SALT',       'l48yFfKW O5QrKaTe LnZvppvs Plb2Dpro ZBiuhQNT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jf_';

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
