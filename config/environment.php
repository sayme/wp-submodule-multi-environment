<?php
/**
 * Setup environments
 * 
 * Set environment based on the current server hostname
 */

// Define site host
if ( isset( $_SERVER['HTTP_X_FORWARDED_HOST'] ) && ! empty( $_SERVER['HTTP_X_FORWARDED_HOST'] ) ) {
    $hostname = $_SERVER['HTTP_X_FORWARDED_HOST'];
} else {
    $hostname = $_SERVER['HTTP_HOST'];
}

/** Define WP_ENV */
if ( getenv( 'WP_ENV' ) !== false ) {
    // Set environment based on environment variable
    define( 'WP_ENV', getenv( 'WP_ENV' ) );
} else {
    // Set environment based on hostname
    switch ( $hostname ) {
        case 'example.dev':
        case 'localhost':
        case '127.0.0.1':
            define( 'WP_ENV', 'development' );
            break;

        case 'staging.example.com':
            define( 'WP_ENV', 'staging' );
            break;

        case 'www.example.com':
        default:
            define( 'WP_ENV', 'production' );
    }
}

/** Load current environment config */
if ( defined( 'WP_ENV' ) ) {
    if ( file_exists( dirname( __FILE__ ) . '/environments/' . WP_ENV . '.php' ) ) {
        require_once( dirname( __FILE__ ) . '/environments/' . WP_ENV . '.php' );
    }
}