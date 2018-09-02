<?php
/**
 * Services for the Pimple Container.
 *
 * @link       https://realcodelab.com
 * @since      1.0.0
 * @package    Real_Subscriptions\Core
 */

namespace Real_Membership;

use Real_Membership\Utils\Activator;
use Real_Membership\Utils\Deactivator;
use Real_Membership\Utils\Loader;

// If this file is called directly, abort.
if ( ! defined( 'REAL_MEMBERSHIP_LOADED' ) ) {
	die( 'Real Subscriptions plugin not loaded.' );
}

/**
 * The services for the dependency injection container.
 *
 * @since      1.0.0
 * @package    Real_Subscriptions
 * @author     RealCodeLab <support@realcodelab.com>
 */
class Services implements \Pimple\ServiceProviderInterface {
	/**
	 * Registers services on the given container.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 *
	 * @param Pimple $container An Container instance
	 */
	public function register( \Pimple\Container $container ) {
		/*
		 *
		 * Define the constants
		 *
		 */
		$container['CONST_VERSION'] = function ( \Pimple\Container $c ) {
			return REAL_MEMBERSHIP_VERSION;
		};

		$container['CONST_PLUGIN_NAME'] = function ( \Pimple\Container $c ) {
			return 'real-membership';
		};

		$container['CONST_ROOT_PATH'] = function ( \Pimple\Container $c ) {
			return realpath( __DIR__ . '/../' );
		};

		$container['CONST_FILE_PATH'] = function ( \Pimple\Container $c ) {
			return realpath( $c['CONST_ROOT_PATH'] . '/' . $c['CONST_PLUGIN_NAME'] . '.php' );
		};

		$container['CONST_PLUGIN_URL'] = function ( \Pimple\Container $c ) {
			$wp = $c['wp'];

			return $wp->plugins_url( '/', $c['CONST_FILE_PATH'] );
		};

		$container['activator'] = function ( \Pimple\Container $c ) {
			return new Activator();
		};

		$container['deactivator'] = function ( \Pimple\Container $c ) {
			return new Deactivator();
		};

		$container['loader'] = function ( \Pimple\Container $c ) {
			return new Loader();
		};
    }
}
