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
define('DB_NAME', 'perssons');

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
define('AUTH_KEY',         '{S)3E&Lq^_%: g`}ij*e<kdUH}LczG^e+6|NYbnf)JIw?^uI?= 0Z-I5YLE9M^cG');
define('SECURE_AUTH_KEY',  'Zj!9]iiQml*%(*xjpmeuA{r@rDK>e+SP^rQQ_}vj?Fc~0EUG, eu`K!w-|8 ZjRK');
define('LOGGED_IN_KEY',    '~~,]{]1kOa}(uFQ|v(6*bo](L#QHpPl,s|j*MU;YBPSu*Z+b/=yx6A#3G,C$:S{3');
define('NONCE_KEY',        'u,>wPH+L;+#8i4:oDx4i+fM4;^Q#DOGAwo;sY_DhF%cS,~M32.;QQUh&U1a2amCw');
define('AUTH_SALT',        '=1*E<i$i=O:<RNezFB|A]9G<{V8Zs[PP:$s095vn_nP^{CD|BU]4 C_ru=#K8Qxg');
define('SECURE_AUTH_SALT', 'k.afi*w:#tQ_~nWVEnB6W9Rq_]f(J.puDO VRy[C O:&a-y/w^qMefaW}43fa-Xu');
define('LOGGED_IN_SALT',   '[YW0HiVH*wn+H67sX:qdJ9k1=3Z&u,bC}dGFa-x(+:$&$z0iP>>K6;E_?=0Dg2E5');
define('NONCE_SALT',       'Td(H1zo@5sw6z4.&)9-P6@nXYX5~ U<Jk?E8%JRjbAa8*,Fg{QC1lNUS3gM+qaO|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_perssons';

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
