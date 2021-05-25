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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't8WP3LYPYO4l6l2KQvnjqkZOrgUA+uH8TmF/SRlcK536mw1Pmhr/5PQErDqSC4lIvGV3FCQ3DpLiNRNnn0LgLA==');
define('SECURE_AUTH_KEY',  'yV0PidyxaStXHqXZipgreWY38yelEvMwmt8IbTzNA+c++xXyzFNIbaMqz2qLNdQu3MT0WtCuB3y1gYYEN5+gvA==');
define('LOGGED_IN_KEY',    '0B5AWg/HLTftN80jQaPSkGEGvZ4kx+k7gX4mlX/uvldxjSVo6Y0hZiEBG0Js6we/D+O3qFyKYV/NrhpBH+tGFw==');
define('NONCE_KEY',        'wnX8d15ABTYnZELuNEenywwgMiLOYTSPgs1IAhsaFN378HJn2MmygCC4Fa2nJ628bAcuXG0mtmFXQe6/FmfNyA==');
define('AUTH_SALT',        'A4CV9ub0LkjTh5QAy6HjVqZEWvnxMEOCehqsOkN8Z6Ln8WIkPuxIzpwmrDi5TeMi9I2aUokX0uQVQRylaEp8og==');
define('SECURE_AUTH_SALT', 'XpFt7emkjLKsl9yz7DW3Uj8KzyR1RWwmhNJkVW1ZRZwl5l/Vsi3Va6qFT8saqa5u+m0V77ytWUS3FPQn5KbaWA==');
define('LOGGED_IN_SALT',   'q93g2We24SLJnNaWKOamLoXVoPuLeZ/6WurmEvgm4sPSVdH6HesYfNJOYgyuds3ldQ1IBV8bjH1sRs8qNZXH/w==');
define('NONCE_SALT',       'mG/Go3BQrZPPnW996YYxxrjtiydv7LqjuCSiFtr8bz4FauCYk/t2LtSpZ+ksV5ZKXTtKPnW0lsXOBn0v4hOAxw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
