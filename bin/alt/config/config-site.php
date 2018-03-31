<?php

if ( ! defined( 'SITE_USE_CORE' ) && ! defined( 'WP_ADMIN' ) ) {
	die( "Please ensure that SITE_USE_CORE is defined in the index.php file in the root directory of this site." );
}

/** */
define( 'SITE_DIR_STUB', '' );

/** */
define( 'SITE_ROOT_URL', 'http://bundles.local' );

/** May be the same as the domain. */
define( 'SITE_CACHE_SLUG', '/bundles.local' );

/** Default: false */
define( 'SITE_USE_ANALYTICS', false );

/** Values: UA00-0000-00 (Default: '' ) */
define( 'SITE_ANALYTICS_ID', '' );

if ( ( defined( 'SITE_USE_CORE' ) && SITE_USE_CORE ) 
	|| ( defined( 'WP_ADMIN' ) && WP_ADMIN ) ) {

		if ( $_SERVER['SERVER_ADDR'] == '127.0.0.1' 
		&& file_exists( __DIR__ . '/config-db-local.php' ) ) {

		/** Eliminate or rename this file on production or staging site */
	
			require_once( __DIR__ . '/config-db-local.php' );
	
		/** Eliminate or rename this file if on a production site */
		} else if ( file_exists( __DIR__ . '/config-db-staging.php' ) ) {
	
			require_once( __DIR__ . '/config-db-staging.php' );
	
		/** Ensure this file is available for use on a production site. */
		} else if ( file_exists( __DIR__ . '/config-db-production.php' ) ) {
		
			require_once( __DIR__ . '/config-db-production.php' );
	
		}
		else {
			echo 'The database settings are not available!';
		}
	
	/** Default: InnoDB (Alt: MyISAM. InnoDB may be better) */
	define( 'DB_ENGINE', 'InnoDB' );
	
	/** Default: utf8 (Used in the Database) */
	define( 'DB_CHARSET', 'utf8' );
	
	/** Change only if needed (Ambiguous) */
	define( 'DB_COLLATE', '' );

}

/** Default: html (Used in the HTML Page) */
define( 'SITE_DOCTYPE', 'html' );

/** Default: en-CA (Used in the HTML Page) */
define( 'SITE_LANG', 'en-CA' );

/** Default: UTF-8 (Used in the HTML Page) */
define( 'SITE_CHARSET', 'UTF-8' );

/** Default: UTF-8 (Used in the HTML Page) */
define( 'SITE_TITLE', 'Integrated WordPress Bundles' );

/** Default: UTF-8 (Used in the HTML Page) */
define( 'SITE_DESCRIPTION', 'Optimized, Backed Up, Secured and Cached' );

/* REPLACE WP_DEBUG BEGIN */

/** Values: true|false (Default: true).
Set to false to fall back to generic configuration. */
define( 'SITE_ENHANCED', true );

if ( SITE_ENHANCED ) {

	/* SITE_ROOT_URL & BUNDLE_VER set here as these are site specific */
	
	define( 'SITE_START_YEAR', '2018' );
	// Value: YYYY. Useful for archive and copyright purposes.
	
	define( 'BUNDLE_VER', 'B200-WP-4.9' );
	// Values: B000-AA-0.0 (Default: B200-WP-4.9)
	
	define( 'BUNDLE_UNIQUE_ID', BUNDLE_VER . ':' . '2018.03.07:1415' );
	// Bundle Version, plus date and time stamp at time of installation
			
	if ( file_exists( __DIR__ . '/config-enhanced.php' ) ) {
		require_once( __DIR__ . '/config-enhanced.php' );
	}
}
else {
	define( 'WP_DEBUG', false );
	// Show errors if set to true.
	// Values: true|false (Default: false)
	
	/* OPTIMIZATION */
	if ( ! defined( 'WP_CACHE' ) ) {
		define( 'WP_CACHE', false );
		// Values: true|false (Default: false)
		// Uses {wp-content}/advanced-cache.php if set to true.
	}
}

if ( defined( 'SITE_USE_CORE' ) && SITE_USE_CORE || defined( 'WP_ADMIN' ) && WP_ADMIN ) {

	// https://codex.wordpress.org/Editing_wp-config.php
	
	// REPLACE WP_DEBUG END
	
	/* LOAD WORDPRESS */
	
	// ABSPATH defined in the WP Core Directory
	
	if ( defined( 'ABSPATH' ) && file_exists( ABSPATH . 'wp-settings.php' ) ) {
		require_once( ABSPATH . 'wp-settings.php' );
	}
	else {
		echo 'ABSPATH not correctly set';
	}
}


