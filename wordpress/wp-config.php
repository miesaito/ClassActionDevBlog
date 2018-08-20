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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'mu0rkVoYfgtum%era2Qz|EW-&?eD),V6]^$zzesb~eF*WPSKgYU(^-vI=,E)#,9:');
define('SECURE_AUTH_KEY',  '~g-oyJM>{lm.oR<Zh&3e<P_CiF@ODLo+py}zU00_6z!sWBao^O./.Z>{mR,Rb?s[');
define('LOGGED_IN_KEY',    'cnZCemsr702Q|r%*<C>]*(jEJzP1[im_sr~hAE}vE8ELSo;bXUB[6!FOhI@>rM}9');
define('NONCE_KEY',        'A(4#ts.tB%WM1L2kvx}pN@^5 ne`m.F~`g%P$5VZ{Vm=R5d2@(y^[qN:stN)U+lF');
define('AUTH_SALT',        ' j8tpU,Se!f5gvBpm93B%9Yg)o!;YP6%wdzW01u`Jp*f3T2uIj3;FYQ@OB@wAKt~');
define('SECURE_AUTH_SALT', 't#&gA&$v3%SL7&hQoO4KvHup*aweXC<fS&%)G2q6`uzI]z]JdCRsu0E6U5uxOR>]');
define('LOGGED_IN_SALT',   'p15&`baQRaK|6FueX4::wQ]g!zu!y.Jo[x`o1tCm.6OO*XXC4!>*E!;s&s!m]iGC');
define('NONCE_SALT',       'm$<tA9UQR9w5u[3H; wYh4mEG9+TvsvG07{V&^;;Ag~[E;j+Vb-H_{,PD>/d)%WQ');

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
