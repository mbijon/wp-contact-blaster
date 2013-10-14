<?php
/************************************************************************
Plugin Name: Contact Blaster
Plugin URI: http://www.etchsoftware.com/
Description: Change the compression-level of uploaded images and thumbnails. Get better image quality or save bandwidth.
Version: 1.0
Author: Mike Bijon, ETCH Software
Author URI: http://www.mbijon.com/about-mike-bijon/
License: GPLv2

Text Domain:  cblaster-plugin
Domain Path:  /languages/

************************************************************************

    Copyright 2013 Mike Bijon, Etch Software LLC (mike@etchsoftware.com)
    
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2, 
    as published by the Free Software Foundation. 
    
    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    
    The license for this software can likely be found here: 
    http://www.gnu.org/licenses/gpl-2.0.html

************************************************************************/


if ( ! class_exists( 'Contact_Blaster_Plugin' ) ) :

class Contact_Blaster_Plugin {
	
	public $error = '';
	
	const CBLASTER_VERSION = '1.0';
	
	
	/**
	 * Constructor: Actions setup
	 */
	public function __construct() {
		
		add_action( 'init', array( $this, 'cblaster_localize' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_squaresend' ) );
		
	}

	/**
	 * Plugin setup, post-construct. Fires on 'init' hook
	 *
	 * @since 1.0
	 */
	public function cblaster_localize() {
		
		// Localization boilerplate
		load_plugin_textdomain( 'cblaster-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		if ( '' != WPLANG )
			setlocale( LC_ALL, WPLANG . '.UTF-8' );
		
	}
	
	
	/**
	 * Plugin setup, post-construct. Fires on 'init' hook
	 *
	 * @since 1.0
	 */
	public function load_squaresend() {
		
		// Squaresend.com
		wp_enqueue_script(
			'cblaster-squaresend',
			'//squaresend.com/squaresend.js',
			array(),
			self::CBLASTER_VERSION
		);
		
	}
	
	
	/**
	 * Deletes any plugin options & transients
	 *
	 * @since 1.0
	 */
	public function plugin_deactivation( $network_wide ) {
		
		return true;
		
	}
	
}
$cblaster_plugin = new Contact_Blaster_Plugin();


register_deactivation_hook( __FILE__, array( $cblaster_plugin, 'plugin_deactivation' ) );

endif;