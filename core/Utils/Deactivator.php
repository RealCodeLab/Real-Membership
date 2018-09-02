<?php
/**
 * Fired during plugin deactivation
 *
 * @link       https://realcodelab.com
 * @since      1.0.0
 * @package    Real_Subscriptions\Core
 * @subpackage Utils
 */

namespace Real_Membership\Utils;

// If this file is called directly, abort.
if ( ! defined( 'REAL_MEMBERSHIP_LOADED' ) ) {
	die( 'Real Subscriptions plugin not loaded.' );
}

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Real_Membership
 * @subpackage Real_Membership
 * @author     RealCodeLab <support@realcodelab.com>
 */
class Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since   1.0.0
	 * @access  public
	 */
	public function deactivate() {

	}
}
