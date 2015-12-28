<?php
/**
 * Production environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 */

/** Overwrite Wordpress home and siteurl in the database */
define( 'WP_HOME', 'home_address_here' );
define( 'WP_SITEURL', 'siteurl_here' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

define( 'WPLANG', '' );
define( 'WP_DEBUG', false );