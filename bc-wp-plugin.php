<?php
/*
Plugin Name: Berea College Common Functions
Plugin URI:  https://www.berea.edu
Description: This is a collection of common functions which Berea College websites need to function. It currently includes: a) a function to force all transactional email to be "webmaster@berea.edu."
Version:     1.0
Author:      Charlie Campbell
Author URI:  https://www.berea.edu
*/

// Function to change email address
 function wpb_sender_email( $original_email_address ) {
    return 'webmaster@berea.edu';
}

// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Berea College Webmaster';
}

// Hooking up our functions to WordPress filters
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );

?>
