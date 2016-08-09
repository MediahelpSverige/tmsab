<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'traktordb');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'johanmediahelp');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'steel1992');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fB_{.[zMEyImO2D]+nex.,AWB]ZK=1|cSUvt!QBmm<X,3w<BXFUwBpeFzQH<MB7?');
define('SECURE_AUTH_KEY',  'B4i2cHC9xj>|Aj?GY6~fD(UP#e8Me0|WD}8CqFFoMQQ/UXsb1:m4VaKipRDPsJ/p');
define('LOGGED_IN_KEY',    '}x-|dO|y(%w!t=f}6bcf_o18dd0wszhv[f}/zYn!Y}kf#Sm./+Fh<*Q@O|sY-FS^');
define('NONCE_KEY',        'm_7eWPl@a<#cHGG=Yv#!)`) gW5p9D*%^2vv4|CUSv5-E+b69W.jn#9:1sDn,(#~');
define('AUTH_SALT',        '?CCR}7*$r(PaFP,h/+ZYzPaL<v>LCQQ5H3xH2>*GqY.@o-|bVhE%d<p8xr)zbN-5');
define('SECURE_AUTH_SALT', 'gmn+J{|_M@P|Xv@7w~r0@y^1Nk`L+L*4qH;Hdzjm5nmCxLp:&4ZRn:w+5K:W|-{&');
define('LOGGED_IN_SALT',   'cz3rrs%S)Z)u8rCIEy#c)c_E_mF8*.*VXs-qu.4%,hUM)yS82Z$lq7 yys!x@_[$');
define('NONCE_SALT',       '5f<MyVeLnpfp*q^RaJ!/WnI-x6b`SyTg:xIWCRpsm}n9L|B7r#:.@7Gs|K&w}W^~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
