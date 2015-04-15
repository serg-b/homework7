<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%WPq#X0ZhZCool0>RnS]my`[/kkM#mmEfi]n}WJ%s!%nU=`-&<ZbZ*~{b2j1D3ke');
define('SECURE_AUTH_KEY',  '?}ocHt:xNQxKvt!-[Du@xMY+LZk-2NBt[C7;} W.38mA7K`9x%m7o+kt3-/xxX]=');
define('LOGGED_IN_KEY',    '[(-@+QtF`B?8lKQkFwN F_>mLI8Y[&u%Nz?]LNEj2A(7N1&:7!f<%OB<`x-g=yWb');
define('NONCE_KEY',        '(oj# G}_Ot?e/}bpXR82CRdUada:KG+QIlz.But(vFKrj9m]7+IEF^PvH#Fg$mQL');
define('AUTH_SALT',        'Zw?KTfE=Cbx8_?nfE[+LNg ~xikIw,VmmN_G(ygc0](b(H][_Kb{LU/bTz+g9t5 ');
define('SECURE_AUTH_SALT', 's|+c{~,<8.il`+=czy$qMeyCHLhHk!s9LBxGxgA97Id^_t.~EP9R^yE&y-9-m)}r');
define('LOGGED_IN_SALT',   'K:NWmnTLnL+ df@/Hwx`42>hJ9P+AdK]=ZbZ%,|JLwx03$6U9uL1]KL;y%bO-uu2');
define('NONCE_SALT',       'W:qB{U0i~Jtk2bB-L_Ip&)!)X/+9gL%4W!e0&gX972f=5r7z1+9KN,/U=;}-!$?h');

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
