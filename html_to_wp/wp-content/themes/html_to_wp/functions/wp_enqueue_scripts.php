<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		wp_register_script('jquery-1.7.2', get_parent_theme_file_uri('/assets/js/jquery-1.7.2.js'), null, null, false);
		wp_register_script('nivo.slider', get_parent_theme_file_uri('/assets/js/jquery.nivo.slider.pack.js'), array('jquery-1.7.2'), null, false);
		wp_register_script('quicksand', get_parent_theme_file_uri('/assets/js/jquery.quicksand.js'), array('jquery-1.7.2'), null, false);
		wp_register_script('prettyPhoto', get_parent_theme_file_uri('/assets/js/jquery.prettyPhoto.js'), array('jquery-1.7.2'), null, false);
		wp_register_script('easing', get_parent_theme_file_uri('/assets/js/jquery.easing.1.3.js'), array('jquery-1.7.2'), null, false);
		wp_register_script('script', get_parent_theme_file_uri('/assets/js/script.js'), null, null, false);
		wp_register_script('custom', get_parent_theme_file_uri('/assets/js/custom.js'), null, null, false);

		/* Enqueue Scripts */
		wp_enqueue_script('nivo.slider');
		wp_enqueue_script('quicksand');
		wp_enqueue_script('prettyPhoto');
		wp_enqueue_script('easing');
		wp_enqueue_script('script');
		wp_enqueue_script('custom');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>