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
define( 'DB_NAME', 'bageurid' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'iulhKvM2eXOUfG801Q9sVn9pSDsMnYnjr6y29b3gVm57bThxz60Nm4EPyypoyG1z' );
define( 'SECURE_AUTH_KEY',  'gGaTg0XK6F1afhYG30XxrnOqVWLk2Zxi8RMAUJT6tGHVHGN9JE8gLywu2yWOWbM4' );
define( 'LOGGED_IN_KEY',    '6Ih0NyUpG6fspLE6Pp1MeZyb9z0YoYnEJcYzIyMh1dJS8EV9bYRlCfWnhnnhT4Do' );
define( 'NONCE_KEY',        'ixPkvnOOY3Auz8nBsYgOVXX4wXH0FCSrHRPgFBa4zowhXzrHQk2CkEkSJPS2LlvT' );
define( 'AUTH_SALT',        'ux3rOxT1dlxUXeRvE8Xut5K5JetKu3Ivh3usdInI9dO6oI69yQwo8G21VQKYXTZL' );
define( 'SECURE_AUTH_SALT', '0wjRR9A6XuWlzDkI2nExUedkMUVyCZVDf2HTlYE3OQzLpOUdlhwwLL5NEbJ5qqDb' );
define( 'LOGGED_IN_SALT',   'bVJRWLqXDwuRLF8sovicpWVsvRLMFTMhYiR1zr4XqjU16BdTnJx9bAlvuSkm0vy2' );
define( 'NONCE_SALT',       '6ZOApPSZ7Ut1RPZHW1Ink9gayguHVZY23Db4daHo4laX7l16EMYQWXSNkPsu8HVl' );

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
