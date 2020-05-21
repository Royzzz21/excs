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
define( 'DB_NAME', 'pcsuppor_wp205' );

/** MySQL database username */
define( 'DB_USER', 'pcsuppor_wp205' );

/** MySQL database password */
define( 'DB_PASSWORD', '925Fp(!SvT' );

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
define( 'AUTH_KEY',         'hjdkipez6ugbhipuoionupyva7tgh5xv0fahkbveqjpmors1bpjqgvzfofetekll' );
define( 'SECURE_AUTH_KEY',  'c6v2v2nyqik9sgheztdr13tm3m0g65y1ux2qjzndkhou6pxytbf9bcogbnbhw4kw' );
define( 'LOGGED_IN_KEY',    'zdybk5he3rs2hmty5ifmsqdsogpj0762qfcgu45mxylvxcctkr0c1h3oswfvvuth' );
define( 'NONCE_KEY',        'cudzqmdxflzrgirjoxkwall0sedq9vcznur8ekt2iy7insiblqhhgztody5ocyvu' );
define( 'AUTH_SALT',        'dxy8ui9izoenmkvyprhonve5vh00i5t7wwqlm90dn3trjaxzmk8xicwt1cbefbr4' );
define( 'SECURE_AUTH_SALT', 'gvzbszdxikecvnalnd4gknlzjgsexolwtqkx6c26hpvysnjuosmjqaan0qf7o7ss' );
define( 'LOGGED_IN_SALT',   'ffst3hip9kurggczzj1aqsfcsgtlzmpilmjuabejboufye562hwkevercafs5dmc' );
define( 'NONCE_SALT',       'db5suwlx6bpzxe3buohxnh5jmp9oea7c7llawrohxnt0wqqi5sthep9mmnfj3rhb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwn_';

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
