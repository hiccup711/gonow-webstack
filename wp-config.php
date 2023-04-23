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
define( 'DB_NAME', 'jq' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'rootroot' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'P=SgS- {3[_SF(HQpt-GPojEUCydQn-Pr;Efz5nS=,DvemFl]N7IB(rC](IA3dBg' );
define( 'SECURE_AUTH_KEY',  'ja9V(B=3Jw?v*u{Niq]Yr`yyV[-20_KSrXSz@60BG^_e &M5cZ*Cghf~16/)U70J' );
define( 'LOGGED_IN_KEY',    'I[ zLb-6ZhV*bc<LfQjcE>Qh[5YLqQXvs;+FW!+n&B4eaK^>tFb!pQ,*>Ay3aQW1' );
define( 'NONCE_KEY',        '`kKH12^!L)CI)3V7>/x6|F!m)O39oJ{KwT:`@OoJ%cAl@EP:Li[ m.F>A &w|0ll' );
define( 'AUTH_SALT',        'glIzz,=;p7I906J&WGp<9Xj/y(K~Hm?~%.q:QPl2e-}KL;MVm@&-# 6nONAY$)|3' );
define( 'SECURE_AUTH_SALT', 'Sqkn)3Hsk-DK@Q1<F?pM@O8x/{6,VdZZAy5`vu }mR<SkDzq0$M]H[)#/U z{)Ud' );
define( 'LOGGED_IN_SALT',   'h`[D~s,Kz+rEQMm%Rq=?J)jyf8,E1w~qdi-+HdO8^Mr`u:LQRf]OF/>XDS?C(w%-' );
define( 'NONCE_SALT',       'Yig%<TK}Zd]a7y2N,zTo~i*We6-IY<i:AFZ[Vh]S2-x+$<%fWpNhoiSB?HP6^chD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jq_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
