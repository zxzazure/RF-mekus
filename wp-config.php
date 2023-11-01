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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'RFMekus' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mssqlpassword' );

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
define( 'AUTH_KEY',         'n~9K5RHG}q6^VXRm.T> ;i0tv_U]7L#>(E+?}Bb:GhSRK>9K5u,[b~gBO*s]{C4V' );
define( 'SECURE_AUTH_KEY',  'A@v=Dd}h+Kux!c96b-Ll1<0t._@M!E}<,pZRbrK+c5-9Sx67:hH4_e*b`D`5@Thc' );
define( 'LOGGED_IN_KEY',    ';m+{Tk__,.V6~a@Z=oCQcF{oX0udMWBbT7Np2PtAyvBuQi8OiZI.Ff[@i|;gkdK~' );
define( 'NONCE_KEY',        'm9FLe Y(3pYPk_(6m1Ok/LGiR${(P-c^!B!o8#_ U]*cyh24xH3:*X|7:LdW;MLU' );
define( 'AUTH_SALT',        '+/Pv+S]mj/4d*w5:!}J8Y>6|*.AwyIk<G6&G?5&w.UcYM.bC>Y~twV{OkOA/%iru' );
define( 'SECURE_AUTH_SALT', 'cAf56NQbGddzqTXn.$kNrU.yveOB:n NP;9hJ}YwLO0-;!h7$0!W:oTSrTLRAI2N' );
define( 'LOGGED_IN_SALT',   'Cd:,atx}bAez^I7>sTk:$&2E2vU{1}Mf5?B@z=e%d+K6q]gSv5$nU.zN,6 /tW(b' );
define( 'NONCE_SALT',       '{^7r SD}fF]/k|#Wmc:p0XFy0XcE$]%T94?)eUXBsJ ]J)GFc0aY(MCXMd`Da>qi' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
