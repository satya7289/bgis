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
define( 'DB_NAME', 'bgisoclu_imgdb' );

/** MySQL database username */
define( 'DB_USER', 'bgisoclu_imgdb' );

/** MySQL database password */
define( 'DB_PASSWORD', '.hC41Spw]2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'gsbuoby9ipvdhh7mnv3wjldwzyy4qkj7ieovyak4zrzhdm44hlkish44uw5x0yvq' );
define( 'SECURE_AUTH_KEY',  '91e6sswuw6p7xsiibigrggr9udbn4lkk7cayucafwv92rwvudsavzcb7ezryot7g' );
define( 'LOGGED_IN_KEY',    'makadzwf7qef0sibl1wdrjuxd1z8gk3hkgq4jqq1mcy4ery0vwsumb8ztwacwhss' );
define( 'NONCE_KEY',        '1a6caoil7b0ccv2rkwfyighjtbdoc878vlviqu8rfdshxahzmtwtuazuelpmmlzm' );
define( 'AUTH_SALT',        'izthpp8n4sgstqvmhykfoezrjxguqqqedcxoco2ldynmj9quwqcyiz4gh4waplet' );
define( 'SECURE_AUTH_SALT', 'lbwehejbo5h6fa2ns9r75ctmcopc6ih6r7vddbcsvxro4fu4bnf2tfl3pvq5ulvx' );
define( 'LOGGED_IN_SALT',   '0tukcmkuydk5zpw7tpj0n1ndtcp6r9ciuyxfa0t0awr54bqval5kmgb0mbsy24h5' );
define( 'NONCE_SALT',       'xwthudgmwvnny32de7lhx49d9l3rwtluyqi3uqa08wwkloa5espaute0c7iu8e88' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bgis_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
