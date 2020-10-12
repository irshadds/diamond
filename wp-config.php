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
define( 'DB_NAME', 'wp_diamond' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^,IS$+06(TrKFS^z!NP.6jXdh<hl{kB3|ASOYjDitYIhB1,KHe2#ur<KuLdV,(7l' );
define( 'SECURE_AUTH_KEY',  '*c,LMnN?e|i8nlkp^JGpZ`IlMDk4lAi8E3 ^(F^3E<kbet]7/)|(2^]])W6(Jtl=' );
define( 'LOGGED_IN_KEY',    'G]*f+x2{yP((G[hq[P[=@R]x>cZIxGA;UUeR-7q}E0mg49)=fV35RMO`O]=$Q3a0' );
define( 'NONCE_KEY',        'WYh[=OEed1_Z;4}suR{ZPiuR&Q}QR$iB*Ji!9Be>b@KC0f]LJeoo,`O@E}D;@_f|' );
define( 'AUTH_SALT',        '=gh<P`pi?qOeS4r.C<Qd2GE:0fWznS/FhXS JhZVSlg4$:Mn,W<c t<irEqWlN3+' );
define( 'SECURE_AUTH_SALT', 'R7#O$!iKkNgH(h@s5cbt=/[qr1-2Yp~7[c_h#DqE^EmVqAjPJH{7=RUbqMO.p...' );
define( 'LOGGED_IN_SALT',   'x=;jHa<#F39SsXQ3-kPgS@ SMn@B7Ils]Ib|f@@0p924PLM<V# _W;2&3y]t7M8n' );
define( 'NONCE_SALT',       'xhBwGj9!?@{9o VyaZQI*b,sRQF-fw6!S2l2asP%8@qsk)k$$98)2}+ $E$c>/3,' );

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
