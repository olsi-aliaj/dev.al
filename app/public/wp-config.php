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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         '0kYaOzDcQFWHkbsG7JJ62ggmnlnmrfaSH741daZfvIvDd4SlGSdjFzxjLSNQP4jcQRfwn1AK4Zqz7oUR4WQOkg==');
define('SECURE_AUTH_KEY',  'vn9zFNAsiBKk3RFExGBgY4m0bm/ZI7avDSsgsOHcse7fc5v2heCQ8rrC6fd/h9kRrnZQCiOBUQ+OEl9IJiXOSA==');
define('LOGGED_IN_KEY',    '1KBN+TMf/sl0iWmlpqI8McGkCm6YOuQkGV6nPN/RE4DWj+9GA4tdCjwb4TCzqvntwI8idcRXisjHdlt82NDRrw==');
define('NONCE_KEY',        'HBh4biYGdqnaR+wrc69wKCEgPV6hDQV5of7mHcreNqIHzyD0eRYLWc/sPOJjNWOxGIuyWqTSoIWu2d5tAlRGHQ==');
define('AUTH_SALT',        '+qNGxla7CfglYdWwBQYIhj42QueEdSkf9QR7nevYCbbYAwpUFxFkUDnaUct+Ys2ie6sVLDSGx5QCD+sV2mZJAQ==');
define('SECURE_AUTH_SALT', 'D9FUo4Jq5pQb5sdmo6iuVrGoDE9BASf+Y3xCqoziyYkd8EGSuF2BogYt6sZrpHlXmF58nbCtfVX5M9AoXC5Uxg==');
define('LOGGED_IN_SALT',   'LSA3I8K7lYuHustum36zNRl8d7IUOMeSO6r9oizWX3ZwS3Asughh+UaEE2lSF8QxGOK58hA4V10+IJkh6h82cg==');
define('NONCE_SALT',       'FEN8/6/f/eRolz3Gu/mYwL1yHmE9nthGDPCiI+RMq4kZv840id2s52JFjmdUlik3qd3LEspxEuPKFqvgNRya0g==');