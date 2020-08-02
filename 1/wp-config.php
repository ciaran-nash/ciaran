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
define('DB_NAME', 'syowiak1_new');

/** MySQL database username */
define('DB_USER', 'syowiak1_kyambi');

/** MySQL database password */
define('DB_PASSWORD', 'K.4*xFzPVU[%');

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
define('AUTH_KEY',         '~uie+HzM?4i[kdT~dK=BVb*-u-W:6;nGSzp`wnr%jO`R nYE6nSZI.eKd``bT#xX');
define('SECURE_AUTH_KEY',  'b|<^997)V]OEj ShA_LFD:fntM0O~*{kg6`mTpX-C0,*6RH|A6Q656D>AS0VA7 K');
define('LOGGED_IN_KEY',    'Z>XsvKfpw{@Q2;R;oeZc(r{g!ZEX]~(v?(0Tk^ 8ZC5((_SQv]EaFoyMMbbk c*)');
define('NONCE_KEY',        '2uVlHN5(bB.&~ph;N@oZOxhvig2pHJ^>6;QrWPP.8*]PM&D]7Od~uu^9JgFgBH9 ');
define('AUTH_SALT',        '< b7A(R3;%%+a8?q@EGun..=E5#c9ueD7=d*qk~C%W_I4vj,.DrN-}Y(Hi5x|bor');
define('SECURE_AUTH_SALT', ')${uxR::Zjih# Yrk]B#sMRwH$TvJ=-78W}QqtF]Dhf<6cws|Mc#+}g-8{+T=|IX');
define('LOGGED_IN_SALT',   'UZx`0xmujLUNvzepFG,!VXkj@dlvKvfqvO7uc8hKkJ3BdeF.N`)?. VY,FeX0NVQ');
define('NONCE_SALT',       'v)j88eG1{0A+[+>$S>ShG5yp9H2zGC[xrfrzV?pDVT>b_NBf;<jP%XR53OLz!RW`');

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
