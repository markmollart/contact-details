<?php

// -- Contact Details! -- //

final class BirdBrain_Contact_Details {

	public function __construct () {
	
		// Build up hooks
		add_action( 'admin_menu', array( __CLASS__, 'admin_menu' ) );
	
	}
	
	public static function admin_menu () {
	
		// Add menu page which allows the user to specify which post types to work with
		add_options_page( 'Contact Details', 'Contact Details', 'manage_options', 'birdbrain-contact-details', array( __CLASS__, '_options_page' )  );
	
	}
	
	public static function _options_page () {
	
		// Render options in-line with WordPress core styling
		echo '<div class="wrap" id="post-navigator-settings">';
		
		echo '	<div class="icon32" id="icon-options-general"><br></div>';
		echo '	<h2>Contact Details</h2>';
		
		echo '</div>';
	
	}

}

?>