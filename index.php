<?php

/** Start time to four decimal places in seconds (float) */
global $site_elapsed;
$site_elapsed['start'] = microtime( true );

/** The path to the directory this file is in. */
define( 'SITE_ROOT_PATH', __DIR__ );

/** Default: false (Load core|minimal) */
define( 'SITE_USE_CORE', false );

if ( file_exists( __DIR__ . '/core/index.php' ) && ( SITE_USE_CORE || 
	$_SERVER['REQUEST_METHOD'] === 'POST' ) ) {
	
	require_once( __DIR__ . '/core/index.php' );
	
}
else if ( file_exists( __DIR__ . '/bin/frameworks/firefly/index.php' ) ) {

	require_once( __DIR__ . '/bin/frameworks/firefly/index.php' ); 
	
} else {
	
	echo "<div style='font:16px/1.6 sans-serif;text-align:center;'><br>No useable frameworks available.</div>" . PHP_EOL;

}

