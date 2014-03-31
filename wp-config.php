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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wobitoca');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_OTo-gBh=YP`-r~zdC+W0i;($$sB+O=QG2EIsJIo^+1|LzzQ.,>-/o_`_~ 5G&u|');
define('SECURE_AUTH_KEY',  '2o_K:V5&xjYEx9==a+QP---p@S*=uN.*^hO`In#J [pTTKB]#dY#+Vd?(WVt E`-');
define('LOGGED_IN_KEY',    'h+%HYLxiY1 IOS:sHg5p8anuU25T(j-M}9/fP|P<Y;Foy-N-Q+ OZuwxT[AU#o _');
define('NONCE_KEY',        'tM|}Us2;*T~dI^!,^C.`jGV2wwCS+]-)P-uOn k.WwxZYZfI.a:TzHU:7KSR(s_V');
define('AUTH_SALT',        'A6?BPf^5dO3pKtYX(t_eE|/@XgPAsFFgt-p*``-Ig+~kRo-G4>~m%T):h-q!S</[');
define('SECURE_AUTH_SALT', '(zE/+&+p06WPmcN>RvqgwOe^YTI[hO+N8%m&]*j[k:P.w2{HT-.2[3y) ${is{#|');
define('LOGGED_IN_SALT',   'F85dS8.f3+2^p-Z.6sX&HjqPg+V+#+NGVL,-#)94$l|VM7)nCy{&R`cF--eT|#y%');
define('NONCE_SALT',       'r+)CGVx-I|zV}+-V4)8FZy.Ul|4u5|]N1sx@oFjM#>P(wNt|1;g6kofbPI5|[Bkh');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define('FS_METHOD','direct');