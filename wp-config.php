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
define( 'DB_NAME', 'miprimerprueba' );

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
define( 'AUTH_KEY',         '{&P$rnf{RmY.NM.AE(?=p7ZeIcZccP^5_UffX4?jP;k7Vs{#e4pdAwq,g3pDJ0Xy' );
define( 'SECURE_AUTH_KEY',  '3NKkiOW9.tw(:+_rvfUi3r+.W-v4u$^9*w-QsH(?kT:QV,x/V<WgUC]Q~+9wmTNn' );
define( 'LOGGED_IN_KEY',    '1ea#W3}S)IjRvdO4O/+,]w*4knvK?OTXKqSP>)nC?dF0m`6|hb!h]u?!375AYtd)' );
define( 'NONCE_KEY',        'q,->?NL?hHPvf0/$|%e5CFtnp#?cdE3b3Pmkpm)}t034Ub#v,W:!@tgGo@W?Xxfo' );
define( 'AUTH_SALT',        'W!12Shi[[;|WvZe0}J 0,P~}`d*O?{?qsC SwK$&_74@:YM#<o{7f3s#?*hdXdB3' );
define( 'SECURE_AUTH_SALT', 'p]c{@LtY}+44Jm7-Ha7V^.$XUh];5r(QBq6;@+(xVn[}*[kJ(o=Q7~h4VWTMaH_F' );
define( 'LOGGED_IN_SALT',   '&q ItkaYcS4Ql{-<Y!fyF]!D< k8$TWC6Jt!TiZEcs{N:-,n#du8ix5GGgjff% ~' );
define( 'NONCE_SALT',       'vGiy&+R/$V:l]hZPmiO|6P6e9^$U?J6/^Ci%v*R]F~B[c>C/X9:pO<4I$cj~lfY&' );

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
