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
define('DB_NAME', 'demowp');

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
define('AUTH_KEY',         '#m-IWS2/s&#mpU~:t!TD@&pZr$H-f|G]_l/4RUaCi2#R*|w$+ZYn;g{XroZ^s9k!');
define('SECURE_AUTH_KEY',  '^;t|RMtr%;n:t,e=Phwm~z`i_M/5eq#E5/1(%x(VnGIc3]=h<S&oV~cy6NAy+Vel');
define('LOGGED_IN_KEY',    'ZC.2Em)m6^Q7xU&13#[W$&@-L]O_QqC)?YVHRBQ>C^P&gumuN?A*3:xOy*925&%L');
define('NONCE_KEY',        '$c4R#- v EX HE8~K5CbY! JDY>c$xQ(k|Q5Ye>+p!(p>q?Rt$PcI2D<c3-^Yn!)');
define('AUTH_SALT',        'Y: <5W4(j850I}]=Fw7{N3@BnP,07n;(>ivjdc13f*C5r@lTJOAILfk!: G7!(9e');
define('SECURE_AUTH_SALT', 'j0x fT1I?{/!Q%1mFdnf0^f,K|#Wc-xai/%GLt-OEvgP(,]vf64xgVD<p6xj6H)O');
define('LOGGED_IN_SALT',   '1:4Pq^hVr2Xw;PlQh$yui@|UQx`_J9-7]b9wiB:#IZS}E!KszC_>NV.1N41HI>.3');
define('NONCE_SALT',       'U]*XI}ZN;[8NHhh#55H63/!|55r,~[_) tKhDycE(t@b|W-*.X*^X7luL(qtUJsZ');

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
