<?php
if ( class_exists( 'CSF' ) ) {

	$prefix = 'spotlight_search_opt';

	// Create options
	CSF::createOptions(
		$prefix,
		[
			// framework title
			'framework_title'         => __( 'Spotlight Search', 'spotlight-search' ),
			'framework_class'         => '',

			// menu settings
			'menu_title'              => esc_html__( 'Spotlight Search', 'spotlight-search' ),
			'menu_slug'               => 'spotlight-search',
			'menu_type'               => 'submenu',
			'menu_position'           => null,
			'menu_hidden'             => false,
			'menu_parent'             => 'options-general.php',

			// menu extras
			'show_bar_menu'           => true,
			'show_sub_menu'           => true,
			'show_in_network'         => true,
			'show_in_customizer'      => false,

			'show_search'             => true,
			'show_reset_all'          => true,
			'show_reset_section'      => true,
			'show_footer'             => true,
			'show_all_options'        => true,
			'show_form_warning'       => true,
			'sticky_header'           => true,
			'save_defaults'           => true,
			'ajax_save'               => true,

			// admin bar menu settings
			'admin_bar_menu_icon'     => 'dashicons-screenoptions',
			'admin_bar_menu_priority' => 80,

			// footer
			'footer_text'             => '',
			'footer_after'            => '',
			'footer_credit'           => '',

			// database model
			'database'                => '', // options, transient, theme_mod, network
			'transient_time'          => 0,

			// contextual help
			'contextual_help'         => [],
			'contextual_help_sidebar' => '',

			// typography options
			'enqueue_webfont'         => true,
			'async_webfont'           => false,

			// others
			'output_css'              => true,

			// theme and wrapper classname
			'nav'                     => 'normal',
			'theme'                   => 'dark',
			'class'                   => '',

			// external default values
			'defaults'                => [],
		]
	);

	// Options
	include __DIR__ . '/opt-search.php';
	include __DIR__ . '/opt-contact.php';
}
