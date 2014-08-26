<?php

	/**
	 * Metaboxes
	 */
	require_once ('metabox/metaboxes.php');

	/**
	 * Initialize the metabox class
	 */
	add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
	function be_initialize_cmb_meta_boxes() {
	    if ( !class_exists( 'cmb_Meta_Box' ) ) {
	        require_once( 'metabox/init.php' );
	    }
	}

?>