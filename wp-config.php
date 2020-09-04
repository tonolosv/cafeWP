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
define( 'DB_NAME', 'cafewp' );

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
define( 'AUTH_KEY',         'UHTSX^S{ztyEz4r5s/qgd`q+E*|.WZ$e!hhO!QfweK3) yT&F-`CQm4=CvpTps,g' );
define( 'SECURE_AUTH_KEY',  'I)biT&c][18/~(GcT%nsh@6`vxYF_(]+PT5dfRO!n@OwhyM{(Sof?;uQ-tV75Bd2' );
define( 'LOGGED_IN_KEY',    'hPFw*uKO#A.qEXr(i)t%`%6C+>i?OFxTapDCcb :%U6`:wso/:/Ych/av@,7Lr_7' );
define( 'NONCE_KEY',        'LQBT!^ghUQN%q^Y6:(:8V5uR2,&|X>K.FDFLOWQG+w#|T.iUtP_#=[*)u-0AT+9#' );
define( 'AUTH_SALT',        'KG*tb:uLG+;izv1^ZB.0*Ym_5Ld5anTC%uo[,.WKHgvWgF/wu9vzk ^kC`|py^n:' );
define( 'SECURE_AUTH_SALT', 'XK>9NAEtWz-My49XRIx199~RYt}XS46UCeHfux)h}sL[shJ#ff,LY/_E (Hy4C{e' );
define( 'LOGGED_IN_SALT',   'AC+[Q74Nt$|WizBz[6[SiXOCwYBG>yG!>-fXTj:;ywhh:*ZC`J15H:*:h=90T0B+' );
define( 'NONCE_SALT',       'o&6Q7@)m#fk=,x2e:-O I!Qg R/hP$h%l2OPfU.(0UqDk4JM5#WauyAQ[fp/[e.*' );

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
