<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
class appart_Register_Plugins {

	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', [ $this, 'register_required_plugins' ] );

		//add_filter( 'insight_core_compatible_plugins', [ $this, 'register_compatible_plugins' ] );
	}

	public function register_required_plugins( $plugins ) {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$new_plugins = array(

			array(
				'name'               => esc_html__('Appart core', 'appart'), // The plugin name.
				'slug'               => 'appart-core', // The plugin slug (typically the folder name).
				'source'             => 'https://dlappart.droitlab.com/downloadfile/appart-core_2.8.1.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
				'version'            => '2.8.1'
			),
	
			array(
				'name'      => esc_html__('Elementor', 'appart'),
				'slug'      => 'elementor',
				'required'  => true,
			),
	
			array(
				'name'      => esc_html__('Redux Framework', 'appart'),
				'slug'      => 'redux-framework',
				'required'  => true,
			),
	
			array(
				'name'               => esc_html__('CodeStar Framework', 'appart'), // The plugin name.
				'slug'               => 'cs-framework', // The plugin slug (typically the folder name).
				'source'             => 'https://plugindownload.droitlab.com/cs-framework.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
	
			array(
				'name'      => esc_html__('One Click Demo Import', 'appart'),
				'slug'      => 'one-click-demo-import',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__('WooCommerce', 'appart'),
				'slug'      => 'woocommerce',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__('Contact Form 7', 'appart'),
				'slug'      => 'contact-form-7',
				'required'  => false,
			),
		
			array(
				'name'               => esc_html__( 'Droit Addons For Elementor', 'appart' ), // The plugin name.
				'slug'               => 'droit-elementor-addons', // The plugin slug (typically the folder name).
				'source'             => 'https://saasland.droitlab.com/downloadfile/droit-elementor-addons_3.1.5.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
				'version'            => ''
			),

			array(
				'name'               => esc_html__( 'Droit Dark', 'appart' ), // The plugin name.
				'slug'               => 'droit-dark-mode', // The plugin slug (typically the folder name).
				'source'             => 'https://dlcarspa.droitlab.com/wp-content/plugins/droit-dark-mode.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
				'version'            => ''
			),
		);

		return array_merge( $plugins, $new_plugins );
	}
}

new appart_Register_Plugins();
