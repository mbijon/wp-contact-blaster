<?php

if ( ! class_exists( 'Contact_Blaster_Shortcode' ) ) :

/**
 * Outputs a "mailto:..." to the editor (text or WYSIWYG)
 * Not a real "shortcode" but close-enough until we add a text-entry overlay & real shortcode
 *
 * @since 2.0
 */
class Contact_Blaster_Shortcode {
	
	/**
	 * Initialize the shortcode-like button
	 */
	public static function init() {
		
		add_action( 'media_buttons', array( 'Contact_Blaster_Shortcode', 'echo_cblaster_above_editor' ), 20 );
		add_action( 'admin_enqueue_scripts', array( 'Contact_Blaster_Shortcode', 'enqueue_cblaster_editor_js' ), 20 );
		
	}

	/**
	 * Adds a button above the Post/Page editor, next to "Add Media"
	 *
	 * @since 2.0
	 */
	public static function echo_cblaster_above_editor() {
		
		//$image_btn = plugins_url( 'images/application-form.gif', __FILE__ );
		$image_btn = '';
		
		$out = '';
		$out .= '<a href="#" id="cblaster_button" class="button" ';
		$out .= 'title="' . __( 'Insert Contact Form', 'cblaster-plugin' ) . '">';
		//$out .= '<img src="' . $image_btn . '" alt="' . __( 'Insert Contact Form', 'cblaster-plugin' ) . '" />';
		$out .= __( 'Insert Contact Form', 'cblaster-plugin' ) . '</a>';
		
		echo $out;
		
	}
	
	/**
	 * Adds a button above the Post/Page editor, next to "Add Media"
	 *
	 * @since 2.0
	 */
	public static function enqueue_cblaster_editor_js( $hook ) {
		
		if ( 'post.php' != $hook && 'post-new.php' != $hook )
			return;
		
		wp_enqueue_script( 'my_custom_script', CBLASTER_PLUGIN_URL . 'assets/js/cblaster.js' );
		
	}
	
}

endif;