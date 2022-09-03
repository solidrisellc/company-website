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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staginglinks_sr553' );

/** Database username */
define( 'DB_USER', 'staginglinks_sr553' );

/** Database password */
define( 'DB_PASSWORD', 'L3(@].fWF04Spyi(' );

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
define( 'AUTH_KEY',         '9qn136c6ajoqlg2oim0xozivljwc9qhd0wkcyjaefspb9cwgpdkeirlzrfsuizdh' );
define( 'SECURE_AUTH_KEY',  'bpqheda7mwwmo3whakin3nqo4wzznqwx6aontcj5aydayrtteauhbfavuwn1edv6' );
define( 'LOGGED_IN_KEY',    '51sd3r2y7lodkrfggz8jbekuh5aklo5oizmsn46ambf01kdlgo523hn9gxtrioka' );
define( 'NONCE_KEY',        'ybrs3cpmwouxlsipjb4sz1tu1eo7ely2e6lstgqgmypqm5c6xbiw05vtww4kjxwx' );
define( 'AUTH_SALT',        'ksxdzb5efp0m8mgjdrtmzabbu2bfp8gxxaqf1ysdom4uhgxxvenszjh13qpybnty' );
define( 'SECURE_AUTH_SALT', 'zte4gbkekflazvkghq7n3tokxifseozrpf7hfe85qbkav6e96uozp9y1bd9p0o84' );
define( 'LOGGED_IN_SALT',   'z7i62bdpghp7sukunlqchaaflocwt54k5tpvwbi9ksr2z1gtbeyrgkojw7ld4fak' );
define( 'NONCE_SALT',       '6zoyvvpr0jumvnvohlzipgbwbwksyhmmb6ebkijr2ime6n9fwbypebqlmfwtsxyl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp54_';

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
