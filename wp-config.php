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

define('WP_HOME','http://localhost/ask_med_pharma');
define('WP_SITEURL','http://localhost/ask_med_pharma');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'askmekiy_wp327' );

/** MySQL database username */
define( 'DB_USER', 'askmekiy_wp327' );

/** MySQL database password */
define( 'DB_PASSWORD', 's0S[pO253-' );

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
define( 'AUTH_KEY',         '2xp1xdj60b9ah5q7q97kcjatbhysl90aeoswfogvtvzbeg0rgufudmsiwqeodt8g' );
define( 'SECURE_AUTH_KEY',  'ol7a220vz9xuxfuzlktbmylsvbwt0ojygv8gafx7w2r0e9sq78lu42snsnyjygp4' );
define( 'LOGGED_IN_KEY',    'iwwggnufb9pkeqwvyjagtqbhdthlgtignvy9kzxk1v21hjx3tn25vcqw0j6fpcbd' );
define( 'NONCE_KEY',        'dnhj9u8x95n15juilmw3vqonajj7o5txrtxqd9nsswy0hg6bt8v1n9kjevjeoukv' );
define( 'AUTH_SALT',        'rlyy5kotch47khhfykalalkmy0nerxkhq57n4f0ndpg1hu3jfpwsxcbycjbasbun' );
define( 'SECURE_AUTH_SALT', 'bod2zv1gptziiyxbyrynvku39cxm9ukdkejesooczsxla3ftnqaryp7bmpkwkvcz' );
define( 'LOGGED_IN_SALT',   'w143lsnhpzirazhw40lveeqzpbzqwcfekxzwlmjv4tnvpu4kt57vqp6tuqgs94xv' );
define( 'NONCE_SALT',       '0zcqtkdif0lesgpamnzsswpjchgnvixicbmiddnbgofsd2y7qhqsapjzpvmryrf2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq6_';

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
