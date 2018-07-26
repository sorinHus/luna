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
define('DB_NAME', 'luna');

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
define('AUTH_KEY',         ';YB)cg?pvWoLgE]L6@)w:9j0r_N|68PKj{XI7Pn~XtkYfy_+~m!p!)ck1>zuP4e1');
define('SECURE_AUTH_KEY',  '+!NUIxnI;j-*{Dh:o7]B7chgjCW!@fI<OZzA=Y|&}+]ZYbwXvp8/GPlQr3L?8AIN');
define('LOGGED_IN_KEY',    '%;W{j8p<s-vO$|q5<:;:eNFFfZ.cNkqR4j8[l0<.~ZA-8*Iy|IUK[d]K%S+YH wz');
define('NONCE_KEY',        'Sf,1}z&@Z *6aL.TzF.3,eaT} mfA~~b!E`Qa[6WR2Gt4cSn_-aU3&.)db/!JYq*');
define('AUTH_SALT',        'P+`w`maoG[I#IZk-.I2&dvuL=aP#r[~CRnJt!f.f*lR;e$iWmjm@R9DHgY.`o)`p');
define('SECURE_AUTH_SALT', '2i+C>H#9ES]eYyv|llmB-H!z7k6A_1KUD%[YFKH&U;bVX4_@z;O@C_j]|g5]cha+');
define('LOGGED_IN_SALT',   ']0iBAu=iJ=N4oN_L7?C9EdTT1? k9#%:d42Bs{s[89MeGuZ*IdkxpSELa^s8HLbu');
define('NONCE_SALT',       '2:}R6ayFvT0,25,c=9Z=.`oD%K}?/_>w?;OosfEPCU?L(sF,8,(3I#*-ED!wWZOl');

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
