<?php
/**
 *
 *  Profile Panel plugin for WordPress
 *
 * @package   profile-panel
 * @link      https://github.com/ingobaab/laps
 * @author    Ingo Baab <ingo@baab.de>
 * @license   GPL v2 or later
 *
 * Plugin Name: Profile Panel
 * Plugin URI: https://github.com/ingobaab/laps
 * Description: A lightweight profile panel for WordPress.
 * Author: Ingo Baab
 * Version: 3.3.5
 * Author URI: https://www.baab.de/
 * Requires PHP: 7.1.3
 * Update URI: false
 * License: GPLv2
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
**/

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
