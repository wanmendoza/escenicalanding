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
define('DB_NAME', 'escenicalanding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wanmendoza88');

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
define('AUTH_KEY',         'F]DeK}G{L<!UxyhI!iTH<R-y;5ye.AQD>Om*s?&ARB6Ss,3Bd xW]0bh)ta$= %W');
define('SECURE_AUTH_KEY',  '#]%(?VI?4]}Gi3H~|G0H5D^5(fA-QpY;0_dZ-K1![seQiS=/}/V|U7)(FG=Z6S<O');
define('LOGGED_IN_KEY',    'gQV#[5D<3y56~.(TFvk<L}#%/8z3fu7GFZqJeoZ9_K[zG_3RBV,RGsjH*zQZ QEn');
define('NONCE_KEY',        'Txv)Byvs*W? q+)W+A1]mL+$FQRTr/ldw)Iqv&pLr.Ik,w9F@]6#$*zWNBfCP~x/');
define('AUTH_SALT',        'ms5I%g9gbsjO&N-r9HgU CGxgFiW9V.:O#mF!rS_P2wEn;i]4EYU5VHM;>JZ9/i:');
define('SECURE_AUTH_SALT', '(r)W7|%huTHa6bl>8G5:RDW/NQ}Leth>`{k26VErE2PoW%w?jIB9q(1$z=/8BlXp');
define('LOGGED_IN_SALT',   'j{OP<QN)FFPIL1=J&@B4`J-JmM]DOv2Ks>e0=f|9=IK(-eU;IW9%b?hAMPT6@#E/');
define('NONCE_SALT',       '=%BTW;l8z-dUfR_gr20%Zo~{L)H87&%Qp+zLD!b%g8OEuu4F?J8V;jBP0J*9W[lu');

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
