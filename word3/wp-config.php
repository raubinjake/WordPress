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
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         '+p5y7gI.9Z1^P3_K}=C7!,Ok=Yc%?Jkc]6(-Uqt}d4j^aetav5K5MNr0S<21gwfS' );
define( 'SECURE_AUTH_KEY',  '`P>)X,rq@}f@ ,o8oSFt;0*/y7.q5f#Hh9ef5M&^4d<)IDIZVG09,)uSv.gObf@c' );
define( 'LOGGED_IN_KEY',    '{ckkU[R!(ZFHIbLfh9qaIQYw|mpQ@K?`U7f6O0lP;H1.>]OxVJ9GEdz+*G@+S5z!' );
define( 'NONCE_KEY',        'df/$CXanULnx9p7@y:G0m9=sbISn9QN{tZ-,#wyh` K^7:Eaff_;Y9sb.|O_Gs8H' );
define( 'AUTH_SALT',        ' Ril[^L`1M2|a]t@$XI_p(=Bfy{`Y!,,EUiFTxu!]1/sQ7PNf1gxPjN+{5_3b@ht' );
define( 'SECURE_AUTH_SALT', 'c(94T_,bN)NAc>,Vww1Zid2j2pSDI:2T~/rqO#z1{ k`uRVAxjlzO8 XveiAMGuJ' );
define( 'LOGGED_IN_SALT',   'Eri{53XA/f7&; 9JxeY6@.-2j|smSKLf}!w*zko=Z8d nKo]zP^:x>@qXvJ>S1D4' );
define( 'NONCE_SALT',       '^;$I-IbrY-tzC8?MLoGLuo ZsM6B%P<nD@Bh^ui@A~[oPy>?5Acz)~g$KL7`$[j{' );

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
