<?php
/**
 * Pimple container with services.
 *
 * @link       https://realcodelab.com
 * @package    Real_Membership
 */

namespace Real_Membership;

// If this file is called directly, abort.
if ( ! defined( 'REAL_MEMBERSHIP_LOADED' ) ) {
	die( 'Real Subscriptions plugin not loaded.' );
}

/**
 * The container for dependency injection.
 *
 * @since      1.0.0
 * @package    Real_Membership
 * @author     RealCodeLab <support@realcodelab.com>
 */
class Container extends \Pimple\Container {

}
