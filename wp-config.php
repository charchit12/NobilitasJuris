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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wv]UQ,Jj l4:7 eYv2y4lb2G{BmZyT/6->xP;d7U;PT2[w(2@PM1aSRq{~56/+Y^' );
define( 'SECURE_AUTH_KEY',  '0p=AiEgueY|8.au@y k58Zk@P9=jcV~gn<$2/bj&(+6cbzU^nx%pFOQQ|( (`<5:' );
define( 'LOGGED_IN_KEY',    'r7>U%NnUqWW)lpn$L.Fl[Iw-1w|H8DK=[C.TWRv8n[IQV<g5az,l[Z+u)ANY.%aB' );
define( 'NONCE_KEY',        'RZ/hb F3;O6PMlitqkfY>Zj{;1R)Hi&d&*7#,m=@qMa=?Eo >#4Bn]w^F{&*=~d=' );
define( 'AUTH_SALT',        '+&,GgG +:a/bSDsn6~Jc+,8qQE=vY1uB?TJ$eZB_QCsDy0W[DlQ}ua6_|zhL#%~L' );
define( 'SECURE_AUTH_SALT', '@9}G2Bx,@8GnLuY:YtTwc4eT!%2kDLi C ^5llU.mxbD&yPvOx6B.6}%@;de-..V' );
define( 'LOGGED_IN_SALT',   'i)@#sE@7`OMZk:4=8Ie,AYC3I~}z#9]3kqrVq;S7F{R-T`P:yhs7Sl30X@VUh}}/' );
define( 'NONCE_SALT',       'h9M;=y)JC+*_>/y.?I4M]k%iGz*3:o*-#AabrR/%5q>N=G|]~m@xWV==5X@.g_bL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
