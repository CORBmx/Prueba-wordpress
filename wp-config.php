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
define('DB_NAME', 'corbwordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '7~$a)N_C.yF3k@[BjE|LyIcJR+)H-)H+OQK~8c3V~Ne(f@!+r w:vgh:tm)>&vlC');
define('SECURE_AUTH_KEY',  '#nBpX,>c$*5zPBgDyk]=WAq3<ul}+|A;h}z2*h6ksgMN&-MDw.~%gl^y1hP%pV,K');
define('LOGGED_IN_KEY',    ':;kf]-[f-:C4829_h?dk+1[Z6#Qyx&43i(=0CL,v;#6jYAT_wUeMowA*7b^s.7*y');
define('NONCE_KEY',        '_S|k8:Q+rRy~w%S;IOXoOFuKDk1]l<b+{=|KrUv/g-gZ;yf*W_R3jT)aP76nK$RT');
define('AUTH_SALT',        '5y(;YJUn,7@%/W%?+.@w)Y,}y0}=$>Ss+0}[c+/JXCQuzpV<*Q-_K?!)=l^[t>23');
define('SECURE_AUTH_SALT', 'T&>?1K.XC +>l<CMK1%glFIS#5i,O*`a@u_6/|#w=JUEO446}*NT.$>IL|~9bZR|');
define('LOGGED_IN_SALT',   'lx^@k=r.:[|Cy(PWF],x)o5As3>FI1&X|.}4<zhGAV}T5s %L2<{>K8d}C;jvX}e');
define('NONCE_SALT',       'EVHAn+tTk#Ff}fqjKjZxhuozg!-D$cyf|=-gX9v$8|4:cI+.XJ-(>*1D{j1pNRcW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
