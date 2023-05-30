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
define('AUTH_KEY',         'tfPn4b+KdI+7aXG28DCTEZVBRkiyL0QmJvVHNCn9FE8IKg4zBNdJnwVDBSn/bOjBSsJ/hSQWb7wWA2M7PS88hw==');
define('SECURE_AUTH_KEY',  'Og3/AnmCdbuBWTssIhmlecTratA/8zic/JK7/nuSE3nFZEZ3t1/zreeXEm57h1OA3O3/S0EN5KJI1xIwF1mA5A==');
define('LOGGED_IN_KEY',    'HcbyX2RLKNIf4AXHdDfyeL1n9b+fzLZWCkB4kEJ3izIWQ9IRsAeEG/cSePrlxSy9pkmiHSItsW6+7jy6LmvUjg==');
define('NONCE_KEY',        'd6FRhHj/TklnVW7BImaurvN1jw7kt0JnY8TqXLpW7ptbtAPL2FNNGyTX4gPzPHjTlQiNpKC8YCGwP2DpJ1c9aA==');
define('AUTH_SALT',        '0aFFx4NHkrAauX6AUwbYyingvzs/V6L2AHCKmLrSFM9ZJLir0I+BaPsVDmvIZWqo7rKdmDGXa437I0Irbftm7A==');
define('SECURE_AUTH_SALT', 'b75W19QriQf200hDV1KMs2PwyMx/AQ+vmjF82Sj/aKfTRiqmt/R8EBBGMrNhVn566lWrC/8RK/YhSqMCWvyuAw==');
define('LOGGED_IN_SALT',   'weYLg6r8cGX4y14pm78YsuCJ/jBvvYbHshF47a8GEEek9d30Rrs4Qg8Av1oRVgQo66qeM1YDt0fZ9J4UIZVEwA==');
define('NONCE_SALT',       'RC+xznmpOer9Tey+XtFUysgKC83LLJPpWOFm5p4eGEjqbHaNjmNhUcEpOPr3oHUVFonqm9PZDCUKkBqb5KeCkg==');


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
