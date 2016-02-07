<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: Local Dev settings, MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 */

/** Load environment configuration. */
if ( file_exists( dirname( __FILE__ ) . '/config/environment.php' ) ) {
    require_once( dirname( __FILE__ ) . '/config/environment.php' );
}

/** Set content directory. HOME_URL must be defiend. */
if ( defined( 'WP_HOME' ) ) {
    define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
    define( 'WP_CONTENT_URL', rtrim( WP_HOME, '/' ) . '/content' );
}

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if ( ! defined( 'WP_DEBUG' ) ) {
    define( 'WP_DEBUG', false );
}

/** Disallow anything that creates, deletes, or updates core, plugin, or theme files. Files in uploads are excepted. */
if ( ! defined( 'DISALLOW_FILE_MODS' ) ) {
    define( 'DISALLOW_FILE_MODS', true );
}

/** Disables all types of automatic updates, core or otherwise. */
if ( ! defined( 'AUTOMATIC_UPDATER_DISABLED' ) ) {
    define( 'AUTOMATIC_UPDATER_DISABLED', true );
}

/** Disables post revisions. */
if ( ! defined( 'WP_POST_REVISIONS' ) ) {
    define( 'WP_POST_REVISIONS', false );
}

/** WordPress localized language. Defaults to 'en_EN'. */
if ( ! defined( 'WPLANG' ) ) {
    define( 'WPLANG', '' );
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );