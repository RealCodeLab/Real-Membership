<?php
/**
 * @link       https://realcodelab.com
 * @package    Real_Membership
 */

namespace Real_Membership;

abstract class Factory {
	protected static $container;

	public static function get_container() {
		if ( empty( static::$container ) ) {
			$container = new Container();
			$services  = new Services();

			$container->register( $services );

			static::$container = $container;
		}

		return static::$container;
	}
}
