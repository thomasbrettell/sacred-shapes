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
define( 'DB_NAME', 'sacredshapes_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://10.1.3.149:3333/' );

define( 'WP_SITEURL', 'http://10.1.3.149:3333/' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9}QAg0LwZd{6jY3jiNA0Uc;).(=B3,1[zH>@>@J$Vg{fnF=9<pEc%wPVR-8#4Qd3' );
define( 'SECURE_AUTH_KEY',  'NK4[s$f4kbRDxg|#NSoVE5Mo)DK}aor9]}>R[rNy%@<u|Z;,McNC`b%,O1p<0rZs' );
define( 'LOGGED_IN_KEY',    '&4E.fuqwHs]M}CZ{~j{@>S@&ujC+Tj|./j1g@|Bouq-<{uD<Cc6P<!C !vZ]!TxZ' );
define( 'NONCE_KEY',        '5nEZ*!o$]MTU)3*I3Jkv/@c+xnf4jn{91CC}f8vbd_=TZ)=Qf=dz0u*u7+s1#Z,(' );
define( 'AUTH_SALT',        'W@|_P?GTN6L ]hy&ZJR[*wW55@-&wQGeerl);-f-?.q6X)3Iyo~*<G`9II%W7d/]' );
define( 'SECURE_AUTH_SALT', 'Yq+3pA-e*Gu/`S%8o5EU!,p2mxP7I2(U|GDFDTFOU/2=:CIHD;,N<-Sz+8;zvaH2' );
define( 'LOGGED_IN_SALT',   'i4|]odD(+yFUR|>iY.pT#2N~6L?v`LCm%$Wh^t8SHSNaWich*_gS+A0@Sylq)qm1' );
define( 'NONCE_SALT',       '$OSdkDY,TTDT0,e2zsQ|u/dmu:@=aNy5p)s/a!7C5dZ$++T31;,Xh}&KNR}_.6Ek' );

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
