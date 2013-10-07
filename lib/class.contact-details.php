<?php

// -- Contact Details! -- //

final class BirdBrain_Contact_Details {

	public function __construct () {
	
		// Build up hooks
		add_action( 'admin_menu', array( __CLASS__, 'admin_menu' ) );
		add_action( 'admin_init', array( __CLASS__, 'admin_init' ) );
		
	}
	
	public static function admin_init () {
	
		// Output styles
		wp_enqueue_style( 'style.css', plugins_url( 'assets/css', dirname( __FILE__ ) ) . '/style.css', false, false, 'all' );
	
	}
	
	public static function admin_menu () {
	
		// Add menu page which allows the user to specify which post types to work with
		add_options_page( 'Contact Details', 'Contact Details', 'manage_options', 'birdbrain-contact-details', array( __CLASS__, '_options_page' )  );
	
	}
	
	public static function _options_page () {
	
		// Array for storing form structure
		$data = array(
		
			'Basic Details' => array(
			
				'primary_contact_name' => 'Primary Contact Name',
				'business_name' => 'Business Name',
				'copyright_text' => 'Copyright Text'
			
			),
			
			'Address 1' => array(),
			'Address 2' => array(),
			'Australian Business Numbers' => array(),
			'Social Media Links' => array()
		
		);
		
		// Render options in-line with WordPress core styling
		echo '<div class="wrap" id="post-navigator-settings">';
		
		echo '	<div class="icon32" id="icon-options-general"><br></div>';
		echo '	<h2>Contact Details</h2>';
		
		echo '	<p>Enter your contact details below. To display any particular contact details on your website, use the shortcode supplied</p>';

		// Loop through "sections" and output form fields
		foreach( $data as $section => $fields ) {
		
			echo '<div class="contact-details">';
			
			echo '	<h3>' . $section . '</h3>';
			
			foreach( $fields as $key => $title ) {
			
				echo '<label for="' . $key . '">' . $title . '</label>';
				echo '<input type="text" name="' . $key . '" value="" /><br /><br />';	
			}
				
			
			echo '</div>';
		
		}
				
		echo '</div>';
	
	}

}

?>