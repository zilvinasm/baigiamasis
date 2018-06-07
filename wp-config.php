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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'U7v5dwq2/F/gG-cBP1C0g:PMv2h/M=9M@I!yw_e$F?TP8?0/lP3e?u^W*=CHs/Hc');
define('SECURE_AUTH_KEY',  'M}[?4.~~ss^/^rU>CVn-RkBx< }M3?I[~Sw]_}#%dRrEb&x7;q89AU#3h<5v;Er]');
define('LOGGED_IN_KEY',    'm_yGZ}*k?3aVjaecLKXCVChJ9o_0fgZuo-glT&<DmFD|,JE{x|}49mD(SAh:QSt6');
define('NONCE_KEY',        '9<^oP.%yNbp3W|FEqsTwa44iHs msOYEE|VbzaE}0mRzR,zkMYcu,^p&oHv#nGTH');
define('AUTH_SALT',        'zpQ ,#YYy*0X%C4jK!8K_XNfozh=ejM:`>,6_1H.r]lt=w; }[|{iHMckp@}ZO2_');
define('SECURE_AUTH_SALT', 'k,rQ~t8MU7^DVXh#2&pMd.{t{J/4k-rW~FQD8;f~30t/DVg-Bp<Le}AxtqTY}E7B');
define('LOGGED_IN_SALT',   'DlwMf%())E]W07rBg0Ob<Rh]NKgX>!8B{1B.vo *(QbnxJu!fSvF:ryo,33,T7ya');
define('NONCE_SALT',       'hm> UoV<aJBnR^lL;QHmt`G2[oL~KR~T~%Eb@onX>gShQ{j0PjVmsA)RDa;Z{k*e');

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
