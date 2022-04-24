<?php

/*
Plugin Name: WordPress Profiler
Plugin URI: https://github.com/ingobaab/laps
Description: WordPress Profiler.
Author: Ingo Baab
Version: 3.3.5
Author URI: https://www.rarst.net/
Requires PHP: 7.1.3
Update URI: false
License: GPLv2
*/

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require __DIR__ . '/vendor/autoload.php';
}

if ( ! class_exists( '\Rarst\Laps\Plugin' ) ) {
	trigger_error( 'Laps not fully installed! Please install with Composer or download full release archive.', E_USER_ERROR );
}

if ( PHP_VERSION_ID < 70103 ) {
	trigger_error( 'Laps requires PHP version >=7.1.3.', E_USER_ERROR );
}

$laps = new \Rarst\Laps\Plugin();

$laps->run();
