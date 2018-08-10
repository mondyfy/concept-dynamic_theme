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
define('DB_NAME', 'concept');

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
define('AUTH_KEY',         '=#t})>ou)7UJ^Lzv5Rc4G,d{keO7p+~1d14kFU1]O(CL^3f*aGOg[n{/PEMYO*jx');
define('SECURE_AUTH_KEY',  '$rNfw`,yl{MfAL>ld!/#A@?xF;/N|e^aOd*ZrI60j=i)$+1eRzHI]2,#xopx)oH~');
define('LOGGED_IN_KEY',    '`Z>zF6/xZ7zo?Eiu1sAOPe&4N~1E^>W:@xr!1N9Jq^b;d]mQ;x)#<Ru)%bE!qnXw');
define('NONCE_KEY',        'BU}s3V5H.(YGNiQhJ:k8LfYDvk5rJk_(^{>S]dr!wlyP<XLCsLu/P&4g6+)#wm8/');
define('AUTH_SALT',        'tccc>ddwa9)5)+=7q<>ni0A{r`j:P]W]eFV7(;?kzeznRzt$PEnR4kGp*I}OCA/K');
define('SECURE_AUTH_SALT', 'R(/F-TRY^/@-Yd:/F^]k.&U| tL`fgo0L3G)tzp|s.[^~QhtpSnl;(0!#Cr=kPcq');
define('LOGGED_IN_SALT',   'TfbH_?c4Fzz3_ sO2|#JGmS6a}x5..]k-T*H{]E9$y8du=9[Bi`s3b/H9>CIu:Nc');
define('NONCE_SALT',       'z7};DfQ[oLF1)eU00uX5nRu{WT{]0?du!Ad_42}@u2Z/x1GU{W0|,H[vNVrE;I88');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
