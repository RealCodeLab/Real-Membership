<?php
/**
 * Plugin Name: Real Membership
 * Plugin URI: https://realcodelab.com
 * Description: Allow users to subscribe to membership plans
 * Author: RealCodeLab
 * Author URI: https://realcodelab.com
 * Version: 0.1.0
 * Text Domain: real-membership
 * Domain Path: /languages
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

// If already loaded, skip
if ( defined( 'REAL_MEMBERSHIP_LOADED' ) ) {
	return;
}

require_once 'defines.php';
require_once 'vendor/autoload.php';
require_once 'includes.php';

// If not loaded, skip
if ( ! defined( 'REAL_MEMBERSHIP_LOADED' ) ) {
	return;
}

$container = \Real_Membership\Factory::get_container();
$plugin    = new \Real_Membership\Plugin( $container );

register_activation_hook( __FILE__, [ $plugin, 'activate' ] );
register_deactivation_hook( __FILE__, [ $plugin, 'deactivate' ] );

$plugin->init();
