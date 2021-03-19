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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '962095' );

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
define( 'AUTH_KEY',         'N+$_+#w(H)@<IrYZHUa~qH+^DL!`r?.4>1%l0GcUA=fV&Jha8eh7!B<}XCVqkvpn' );
define( 'SECURE_AUTH_KEY',  '[lw>@7`MD(hmmFFv/>A32k2w*1dWB`ha>Rl7{=L6I4D#j]ph`$4a[v)r]?`dd)Ue' );
define( 'LOGGED_IN_KEY',    'nYCpei6p65vs:TBWK>jM{hZAh{S<PjSmaV{_Z:HE^pjlVx.u72Nm) zy8^pkPW=q' );
define( 'NONCE_KEY',        's<ct!9,7$3ruZ0)8uzdYcRZUo+RH3&abr82vMBOaz|qHm=CFFtIwrWHbiH{0p&p(' );
define( 'AUTH_SALT',        '`goA&t@2SqWrpnKhOEk@TbvkX 1-}$6;vTFexgY1}1RuHp51v.vs<P.^m8|sel`$' );
define( 'SECURE_AUTH_SALT', 'l>o YO6;B/N6MVN.9ig*WJ)fl`sOt$FQ+p,(c+s9va+NlxrQO&t7|^f&(p[dOm0S' );
define( 'LOGGED_IN_SALT',   '|cl>i<rB8qO43+~.c0{(7vFWmeM6h48T^Ov}&jqG><P=2OeZCwxl$*;@wYMI7T|8' );
define( 'NONCE_SALT',       'A4=I-j1Zxk&4cyg4Ylo?uoaM=wZ_n%JzU6`om~r~[5)4voInM4J;2w<4*@SOG]QP' );

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
