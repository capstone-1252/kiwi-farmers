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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%EKV%4lBbpiokd^s%r~&+1^pYFho]t%Rcq:hkAK4re2sG7y9!lp]}4-(E8L8C.!4' );
define( 'SECURE_AUTH_KEY',   ']3faB>m]MhNW^,LMB%b>=T&T.BqQQI~ulT,_,brktm$(sDHEBe.Vpso7Qg{A/BH@' );
define( 'LOGGED_IN_KEY',     '%gunX~5HIM*j@VE9 _8^e:(0N5WAYu38K@jLvQHu;m56U/r}HA; f/B]Xe?7RXS$' );
define( 'NONCE_KEY',         'c>j&/4d{7Bm~8maS/Hw|J|bFce8,BZF2Wcw>/UO$R(hDdK@GFu%eQy](Vz}yXMqH' );
define( 'AUTH_SALT',         'YW%pMQq&vzg]d9@<?mJ&P?(VRyZ4ss/@[F2!dR]mqVv{<l%B*[<i]G$JMd#Bkc5G' );
define( 'SECURE_AUTH_SALT',  'aW~;qlds|x/6In%fxMS _^=N]A(/AGRJlj6.p-9,2[Uh7d{`ciA_0XhC}a8l^UaP' );
define( 'LOGGED_IN_SALT',    'YwqM@up0k3Kp*=2hBQ4YJ.v{isF}$M%~?mw4FZV[D<BS117%<b8c<v0xl+pU}^r0' );
define( 'NONCE_SALT',        'sw(;QQK=_Yv;!V6DbuYq;)cEwD8eovx8=f}Yj#g#a;qOKx,v{zmIj%,~qJmwD~ .' );
define( 'WP_CACHE_KEY_SALT', 'I$sVY8Ct~t9MM8IFvE_xM*dLp(4whiV>MRo7cPHd8K;yS6AKq%x&y jXR-3D.BAM' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
