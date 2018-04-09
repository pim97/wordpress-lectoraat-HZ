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
define('DB_NAME', 'projec1q_wp320');

/** MySQL database username */
define('DB_USER', 'projec1q_wp320');

/** MySQL database password */
define('DB_PASSWORD', 'jS9.W5p-8A');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eipypi1w7hsq2n3rxj1iaxhipcwislylzyfxi71i6mdqhtdurhs4mfbfjaqicwdc');
define('SECURE_AUTH_KEY',  'cryp7stjhvx718txrzarca4mfkfmhrdd2nb80jsudngr1yhhhrjg0hvekv43mgke');
define('LOGGED_IN_KEY',    'jnxncnhesjrwvb7qtudgmqt4xstds3dhsgnnpk2gvoy2zaszslkna8hdcqmjwncz');
define('NONCE_KEY',        'gll4jukpwso9uizcvnjmjpgqwuu88rfk9dsesl3awnsyo75o7dz272exi1osljwh');
define('AUTH_SALT',        'rbmvhlklename0zsaeqqz1q0t0xrez39pvfbalpxyc85iickytk7ijlo2csjn7rw');
define('SECURE_AUTH_SALT', 'rja5zhviy5a6vaqa1ugepjkhs0q7usyvlaivhpxuqzamyrnjx6dq5abfwgt5ukrx');
define('LOGGED_IN_SALT',   'lcpbtn0hyf7zg3yboble2z8drmmxtzytiso7qomwhxrdyxdbd209ihtb8qioazo0');
define('NONCE_SALT',       'kb9wsp3nts2ncnygvudrbknwffjenzr55y0ow4chkbsc4qlm6aaqvbd6xl3sqxfl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpr5_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
