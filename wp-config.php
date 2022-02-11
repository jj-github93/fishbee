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
define( 'DB_NAME', 'fishbee' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '6QS4BAUmb83uDZpAKBwtmSkEYBJaHGrZqB4tIW4irC5txhpk90U8Y2q82dHdxRji' );
define( 'SECURE_AUTH_KEY',  'CvMc4zeBIDSy0wWjjf14dyrumJ5E1PZeKEtQgry97NKRSjJVacjkYEJuLPd0fvpb' );
define( 'LOGGED_IN_KEY',    'O4Uy8shxFWo3cEUaVppyrC5TUnOMlJbvxmDxsCVEK4GXEVpcSTzjWisXOFUopcga' );
define( 'NONCE_KEY',        '2qoYAYbFFUj92Z7EZZmqPyjaD9lu8R3uJy1K4IvinF0CPjYAxquMPiRN8XdqfCvM' );
define( 'AUTH_SALT',        'y6i84YvUcq9bxwDnyCQ1FeqZ2hFYq1AJ4Ap8Bd194RP1alibztSZPVaaRzJmXgBF' );
define( 'SECURE_AUTH_SALT', 'hKfFTQSp4TkOFnzQPHENo05XpeGWsm8kRy3AxmFIJbDO2YSveBa5iJAF6LX3Nf2k' );
define( 'LOGGED_IN_SALT',   'kGBVJcH2rUsowpQyBQZhAOBttyvH2KlaNmIdpTfur6El3ed1geWSSaUILioBusjh' );
define( 'NONCE_SALT',       'JA42ljD0tOi9B5UKNSYcxXchxvHp3zzIG1P23GaIahUI3G5Xy4vopWu1o1fFpleL' );

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
