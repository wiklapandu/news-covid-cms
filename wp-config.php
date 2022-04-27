<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lks_cms_covid');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#+KSX ha+y)&hhgq1z!YTz0V&6Dbc8Ho40zjTPiFGU?Uz$k!sPbf#&%VOSXrQH)r');
define('SECURE_AUTH_KEY',  ' [LF3`T.~=j&I%u&J.p>EV<$FwU/dfF7G#1Q(38+#zfey!]yq2~v@^)q`)(Ru;=)');
define('LOGGED_IN_KEY',    'K$*O@BBxHKF%NlLa15~@n2l-_ZLbX}Jve|. RYmajJ.V&=>B1xZp=:9a OXa4O?u');
define('NONCE_KEY',        'bu@A|fC9[?o/&A4E uF0Z;yI?^JKxpExed{<KT 7^GgW.2$dL?Ptgt#q4NwEZ=H!');
define('AUTH_SALT',        'RJ[K6rb-wBQ_!o;C0.@/dIX+-$|+}R##+XJY$[G;YP[ybmKqG%h*rL<}AL&=aJCf');
define('SECURE_AUTH_SALT', 'ToZ vy|&mYuMXH)0#(ub#<v}r9SnmcmPb$C>ijp<MuT|+d6*q 7+^>+%#Y5;|c27');
define('LOGGED_IN_SALT',   'T]^Kbs`}wq1,m<E`Z9F-1e lnQivm_c]@`>]wM;h}m}tBISQfxaK^>--3(M!rPcP');
define('NONCE_SALT',       'bKo4+JMSLhtt95_(*`9OOsS!mrNBNW+[v$os>,;g{1L#=i_e1<eIL%F!HY>5R>Wv');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cms_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}
define('WP_ADMIN_DIR', 'admin');
// define('ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
