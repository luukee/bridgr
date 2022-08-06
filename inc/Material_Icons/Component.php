<?php
/**
 * WP_Rig\WP_Rig\Material_Icons\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Material_Icons;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use WP_Post;
use function add_action;
use function add_filter;
use function wp_enqueue_script;
use function get_theme_file_uri;
use function get_theme_file_path;
use function wp_script_add_data;
use function wp_localize_script;

/**
 * Class for improving material icons among various core features.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'material_icons';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', array( $this, 'action_enqueue_material_icons_script' ) );
	}

	/**
	 * Enqueues a script that improves navigation menu material icons.
	 */
	public function action_enqueue_material_icons_script() {

		// If the AMP plugin is active, return early.
		if ( wp_rig()->is_amp() ) {
			return;
		}

		// Enqueue the navigation script.
		wp_enqueue_script(
			'wp-rig-material-icons',
			'https://code.getmdl.io/1.3.0/material.min.js',
			array(),
			'1.1.1',
			true
		);
		wp_script_add_data( 'wp-rig-material-icons', 'async', true );
		wp_script_add_data( 'wp-rig-material-icons', 'precache', true );
		wp_localize_script(
			'wp-rig-material-icons',
			'wpRigScreenReaderText',
			array(
				'expand'   => __( 'Expand child menu', 'wp-rig' ),
				'collapse' => __( 'Collapse child menu', 'wp-rig' ),
			)
		);
	}
}
