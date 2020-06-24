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
define('DB_NAME', 'freshblue_ei4');

/** MySQL database username */
define('DB_USER', 'freshblue_ei4');

/** MySQL database password */
define('DB_PASSWORD', '4fhm5c0d');

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
define('AUTH_KEY',         'e2JN=Afr~K--c7]tMUH!<jMzf F;e1g1W NEMc7T!zyZMK%:LGrNK!!1NphX+!by');
define('SECURE_AUTH_KEY',  '5dW-)(p8;tqJ9DCUE?f-Dw</Hsv8e.PT+/LdUm?  )NKLL^;VmS4W:;Rv@vy46%~');
define('LOGGED_IN_KEY',    'q2d-HzQ?<5-1hBDGR&ZYkRA1N_p<G/VqBg>f`Y9n=Jh8TZX|;{|D/+1Yy@1xr@s2');
define('NONCE_KEY',        'LCje) 2%B/]4;/U@(qAOoisd^ |e-)PqE|a/{j~cWl):H?hQ#&U-P_.%7F]i})N:');
define('AUTH_SALT',        '?oEWR+fc3O/<;R=e$KG_H~2vg^/I`823H=-!=VOS/,98$x$=rY+TOCg4bOW`[BPD');
define('SECURE_AUTH_SALT', 'gA0J2ax.cPG=/%KG/s }pd#d|!Eeg-@W0Rg j`/ii7E6H,c760G<pc(9x:!=2d N');
define('LOGGED_IN_SALT',   'fwbuyX:(~ddovRI`[0jsQuv{vQ$&vOOHMOY*x<%tC}dWY$(N@icWcap+=mJ,+<!Z');
define('NONCE_SALT',       'cSQ<.(dAC.QbHIbD2>vkul!DtU$ Y4>]//{ FQ5iF5..OHhOh&zvcFf?XtZmeV,M');

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
