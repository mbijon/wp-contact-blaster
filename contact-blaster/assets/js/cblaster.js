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
		
		var alertMsg = 'Halfway there!' + '\n' + 'We just added a "Contact" link to your Post' + '\n\n';
		alertMsg += 'LAST STEP: Use the "Insert/edit link" button to add your own email address';
		//alert( alertMsg );
		
    });
	
	// Outputs "mailto:" string to WP editor
	function cblaster_mailto_output( sendtoEmail, sendtoTitle ) {
		
		var cblaster_editor_string = '';
		
		if ( ! sendtoEmail ) {
			sendtoEmail = 'CHANGE_ME@example.com';
		}
		if ( ! sendtoTitle ) {
			sendtoTitle = 'Email+Subject+Line';
		}
        
        cblaster_editor_string = '<a href="mailto:' + sendtoEmail + '?sqs_title=' + sendtoTitle + '">Contact</a>';
        
        var win = window.dialogArguments || opener || parent || top;
        win.send_to_editor( cblaster_editor_string );
		
		return false;
		
	}
	
});
