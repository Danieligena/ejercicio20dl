<?php 
	
	function dl_enqueue_style() {

		/* Register Scripts */
		wp_register_style('Lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,900', null, null, 'screen');
		wp_register_style('main', get_parent_theme_file_uri('/assets/css/main.css'), null, null, 'screen');
		wp_register_style('nivo-slider', get_parent_theme_file_uri('/assets/css/nivo-slider.css'), null, null, 'screen');
		wp_register_style('nivotheme', get_parent_theme_file_uri('/assets/css/nivotheme.css'), null, null, 'screen');
		wp_register_style('prettyPhoto', get_parent_theme_file_uri('/assets/css/prettyPhoto.css'), null, null, 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('Lato');
		wp_enqueue_style('main');
		wp_enqueue_style('nivo-slider');
		wp_enqueue_style('nivotheme');
		wp_enqueue_style('prettyPhoto');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>