<?php
	/* 
		** FULL PAGE (fullPage.js) Library 
	*/
	
	if( !function_exists('load_fullpage_js_scripts') )
	{
		function load_fullpage_js_scripts()
		{
			wp_register_style( 'fullpage-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css', array(), '3.1.2', 'all' );
			wp_enqueue_style('fullpage-min-css');
			wp_register_script( 'fullpage-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js', array('jquery'), '2.9.7', true );
			wp_enqueue_script( 'fullpage-min-js' );
		}
		add_action( 'wp_enqueue_scripts', 'load_fullpage_js_scripts', 10);
	}
?>