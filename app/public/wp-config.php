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


define('AUTH_KEY',         '6ISLeqXDpstvhfxbmUMM620Rk2uyOTQfZtzNFJjUswJs+XUPBJdDLQAkbRFwKx80SrLSPiRr+0Wk4RyyO30Jow==');
define('SECURE_AUTH_KEY',  'ULE01ZtWO+g/ra+StIMIHc4v6h+L+MbjJtd47mHFulN2S4yX9/HoGqQGAkV8U6A0EE8OvpKARE+8b1svv9LlrQ==');
define('LOGGED_IN_KEY',    'dUDt2rDJkUApjpvrYVw4dfcU/FxGeMM4iwmogAp8b5/GEbzzenPhJEigGIOJikkySStXWaWJ8yea5xKmHdNqJw==');
define('NONCE_KEY',        'DICGQ9gTUB2AJa7XAp9BKVmLsKtREe+xiYELmsMBti7PUVUM0uMMP7XiYONczJOaXAGW9VdECGK+OmC1hOABuA==');
define('AUTH_SALT',        'wZ6WBSfaPMkaEbb1VAQI6mwOoNMyICAKUIL3e99pfvxaSN0Lg0zmU9Jx2vsGxCrJsgq43NpKymoqTZbFmX6Y8A==');
define('SECURE_AUTH_SALT', 'qHZnDL5Mrz168h5/LqWfq8x66ZG0bUIHxlMnF7ryoUV3sfJnzup9pcsinA9sdWZqM1RUhcqeGacP4CbzPfzXmw==');
define('LOGGED_IN_SALT',   'cs3oHFKG/dsQPBJiqzSBfUKEs+jMKz04ntF99LXBsRY50wPxemoQjycuf3otBCGWlkz5UcPLj1WyKX+JaD/Fjg==');
define('NONCE_SALT',       'RAfFbAe3i7HIL9zjlll839LukhCY3I5VctaTR+aZlD8Kqp3exD8MKu/8iLUsQ9k1Ni0qGYg+N546jpYYOs43cw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
