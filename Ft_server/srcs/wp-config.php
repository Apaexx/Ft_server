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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'apex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'apex' );

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
define('AUTH_KEY',         'SXF]~d(.oURHW>Q+GJ}WX|N<p#~vNw~d`cK_EQ.n-#2G4`Ed[65;xS;=qeZaS=5B');
define('SECURE_AUTH_KEY',  'HgC{vm.Avb Wo`8(hPRlV4/v*):NSuC>jt<Dr)^X, ogC}X2l9dAx2+sA7z2R?E$');
define('LOGGED_IN_KEY',    '~#FjMWQ3 yBA-+9PUIE3>ob|;}LLZ4H&|]I=3.,|D+@5T8,X5l1<#=aaXk97i)Pw');
define('NONCE_KEY',        'B5XX&_v*&B(D >RLfPlK4dU|JPhQbKcd*DdJE[hrDE+b|!-s/ePhd_+NjsDf0$TV');
define('AUTH_SALT',        '9xSSi%kut4xKv(7~<=,9uO|}5e|R}CC|i;+6!Ol?F]1>&;4l#>bOP>HK,jw*x;(q');
define('SECURE_AUTH_SALT', 'j59)Gw5&t+*k1V@rv,e,8p:FHu!)p>f0kgI?:g3-y.;X]xV]a~%07K?[!Fj`X)<z');
define('LOGGED_IN_SALT',   '%(P24?|UZbjZX]@[{x^,BM+YJ)2+9CHd*)Rb0Tq@w4u1/t&7Mnb7-NNZ1/+$-I(F');
define('NONCE_SALT',       'b#$g#=|*23dlWc<1|uec#xBp!jo.5%/?Z*N+-M-zA:h~`9mjYSd7_B#+vN.|SoJt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_db';

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