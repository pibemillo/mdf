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
define('DB_NAME', 'mdfdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8889');

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
define('AUTH_KEY',         'B^mvE[u~g4DybmjehCF/b04~6bm%sXv;%p36]0Aw8Bb,5+Gi8Qt^BK=nsO@WD_pW');
define('SECURE_AUTH_KEY',  'hyCKV1^yI17sBY&dkzA(|BNg?,~N}+x_IKlc;]5{=A  RQQ5lEa=LYaSV3 1EZnQ');
define('LOGGED_IN_KEY',    '>9,:-h3um!^C.>CZ[mm]MOMmkw)Hq,K4xKc.-PU0kiw_9023X,7stg$EjqTr^Uy`');
define('NONCE_KEY',        '1#f#n 9u~[hNKII&pLU714k3|/mfWz?vd&q]0BT6Iy1{3_zUT;!Z<CclH_jJ,Y#]');
define('AUTH_SALT',        'P&Yj&91#mFT@T}|%p!Q<5i!H.9]J1H+GL8=6r!R=WK{Whqb9]@m% ]O-#[~k!|1q');
define('SECURE_AUTH_SALT', '%VJ.{vI dsDWAchWmm{Dpl3I9mQ^K,Dfmxj5A-!B2g2lq^K.z{hO .W1ij$Udnwu');
define('LOGGED_IN_SALT',   'GaF/05hd|m%dy(8Z==x(wXc[,Krdn{(6 ls3Vn>Y/;=W=N T)=Dm#MF<eDx,:p9^');
define('NONCE_SALT',       '[unNE^maf[~3as<`T&D&7Ny#Gd2nt~q1R1)6sstLS#={rz;#Wdy;%UFLxdaFRPzH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mdf_';

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
