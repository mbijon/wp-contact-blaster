<?php
/************************************************************************
Plugin Name: Contact Blaster
Plugin URI: http://wordpress.org/plugins/contact-blaster/
Description: Simplest contact forms ever: Converts basic mailto: links on any Page, Post or widget into a clean, formatted contact form, thanks to the <a href="//squaresend.com/docs#Customization">SquareSend.com API</a>
Version: 2.1
Author: Mike Bijon, ETCH Software
Author URI: http://www.etchsoftware.com/
License: GPLv2

Text Domain:  cblaster-plugin
Domain Path:  /languages/

************************************************************************

    Copyright 2013-2014 Mike Bijon (mike@etchsoftware.com)
    
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

define( 'CBLASTER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CBLASTER_PLUGIN_DIR', dirname( __FILE__ ) . '/' );


/**
 * Plugin wrapper class
 *
 * @since 1.0
 * @package Contact Blaster
 * @author  Mike Bijon <mike@etchsoftware.com>
 */
class Contact_Blaster_Plugin {
	
	public $error = '';
	
	const CBLASTER_VERSION = '2.1';
	
	protected $cblaster_slug = 'cblaster-plugin';
	
	
	/**
	 * Constructor: Actions setup
	 *
	 * @since 1.0
	 * @return		HTML & script content for each of public site & WP-Admin
	 */
	public function __construct() {
		
		// Load PHP parts automatically from /includes/ folder
		if ( is_dir( CBLASTER_PLUGIN_DIR . 'includes/') ) {
			
			$externals = glob( CBLASTER_PLUGIN_DIR . 'includes/*.php');
			
			foreach ( (array)$externals as $external )
				include( $external ); // Better performance than include_once(), some-risk when big plugin
				
		}
		
		add_action( 'init', array( $this, 'cblaster_localize' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_squaresend' ) );
		
		// Add shortcode-create button
		Contact_Blaster_Shortcode::init();
		
	}

	/**
	 * Plugin setup, post-construct. Fires on 'init' hook
	 *
	 * @since 1.0
	 */
	public function cblaster_localize() {
		
		// Localization boilerplate
		$domain_slug = $this->cblaster_slug;
		load_plugin_textdomain( $domain_slug, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		if ( '' != WPLANG )
			setlocale( LC_ALL, WPLANG . '.UTF-8' );
		
	}
	
	
	/**
	 * Plugin setup, post-construct. Fires on 'init' hook
	 *
	 * @since 1.0
	 * @return		JavaScript enqueued, only to Post & New Post admin pages
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
	 * @param		boolean		$network_wide		Only true when WPMU superadmin uses "Network Deactivate"
	 * @return		JavaScript enqueued, only to Post & New Post admin pages
	 */
	public function plugin_deactivation( $network_wide ) {
		
		if ( ! current_user_can( 'activate_plugins' ) )
			return;
		
		// TODO: ??? Prompt user that mailto: addresses may not be encoded anymore
		
	}
	
}
$cblaster_plugin = new Contact_Blaster_Plugin();


register_deactivation_hook( __FILE__, array( $cblaster_plugin, 'plugin_deactivation' ) );

endif;