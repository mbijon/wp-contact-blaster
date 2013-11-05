/**
 * Custom script for Contact Blaster plugin
 *
 * @author Mike Bijon
 * @see https://github.com/mbijon/wp-contact-blaster
 * @license GPLv2
 */

jQuery(document).ready(function($) {
	
	$( '#cblaster_button' ).on( 'click', function (e) {
		
		e.preventDefault();
		
        cblaster_mailto_output();
		
		alert( 'Halfway there!' + '\n' + 'We just added a "Contact" link to your Post' + '\n\n' + 'LAST STEP: Use the "Insert/edit link" button to add your own email address' );
		
    });
	
	// Outputs "mailto:" string to WP editor
	function cblaster_mailto_output() {
		
		var cblaster_editor_string = '';
        
        cblaster_editor_string = '<a href="mailto:CHANGEtoYourEMAIL@YourSite.com?sqs_title=Contact+Blaster+Email+Subject+Line">Contact</a>';
        
        var win = window.dialogArguments || opener || parent || top;
        win.send_to_editor( cblaster_editor_string );
		
		return false;
		
	}
	
});
