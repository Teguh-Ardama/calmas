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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbcalmas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'vl#ojOMQpZ.Hy}{aK;oUFYC@mS%/%/LOL, U|[4+GFu9rFT(yLfh&*Gj+!NV^k*A');
define('SECURE_AUTH_KEY',  '~uwS{HrJ_VbTXrPP{?or68XM2V,=O47EY8I7h?9g+1 R.?m.vPoesf8|`nKobWO>');
define('LOGGED_IN_KEY',    '!9x_54}td7AEc;7dtOX[8|ZjJF/:6Pu43W29wjtX/{qEWDt!H(Oi}$yYICWKRo3g');
define('NONCE_KEY',        'Q^xnnti@E3T$-oH/0Q$gfBX+W?>I3%nA(&#E7NiW}{GRl?,Jas&g_UvaU&ZljVvG');
define('AUTH_SALT',        'f3L!r]k>}|v/c2+2Od+:hc0$<aNC67mjzpW!Uz+350.:^GKIIrMXx&-KJ((TH~a2');
define('SECURE_AUTH_SALT', '}?dyVMxLJ#hp=m,-l.%^?W1ZmDl1)Ap.7upE~7}fL!}Mj|@2[2;OTO|m&&.0l+f:');
define('LOGGED_IN_SALT',   '=J55c4f?yF|sh);P1#%`{(1ig?wa?!AN_1 PV=yQGM)fp~_}/`X9n!a8Qn3zjMp]');
define('NONCE_SALT',       'n&@Hq:|^O0B}6SOPX{rOY9l2~.bWRbs{X0Ej*ESbxf4*_rlvhCt0Q~r>DIA2*|_L');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
