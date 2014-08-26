<?php

	/**
	 * Constants variables
	 */
	define("THEME_PREFIX", "swp_");


	/**
	 * Load theme textdomain
	 */
	load_theme_textdomain( 'swp', TEMPLATEPATH.'/lang' );


	/**
	 * Custom Functions
	 */
	require_once ('custom-functions.php');


	/**
	 * Metabox
	 */
	require_once ('metabox.php');

?>