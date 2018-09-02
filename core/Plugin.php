<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://realcodelab.com
 * @package    Real_Membership
 */

namespace Real_Membership;

/**
 * Class Plugin
 *
 * @package Real_Membership
 */
class Plugin {
	/**
	 * @var Container
	 */
	protected $container;

	public function __construct( \Pimple\Container $container ) {
		$this->container = $container;
	}

	public function activate() {
		$this->container['activator']->activate();
	}

	public function deactivate() {
		$this->container['deactivator']->deactivate();
	}

	/**
	 * Initialize the plugin
	 */
	public function init() {
		$loader = $this->container['loader'];
		$loader->run();
	}
}
