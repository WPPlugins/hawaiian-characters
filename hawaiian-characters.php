<?php
/**
* Plugin Name: Hawaiian Characters
* Description: Adds the correct characters / diacriticals to the WordPress Editor for use in Hawaiian
* Plugin URI: 
* Version: 1.0.0
* Author: Mark Root-Wiley (MRWweb)
* Author URI: http://mrwweb.com
* Donate Link: http://cash.me/$mrw
* License: GPLv3
* Text Domain: hawaiian-characters
*/

add_action( 'plugins_loaded', 'hc_textdomain' );
/**
 * load text domain
 */
function hc_textdomain() {
	load_plugin_textdomain( 'hawaiian-characters' );
}

add_filter( 'tiny_mce_before_init', 'hc_tinymce_init' );
/**
 * add new characters to end of charmap
 */
function hc_tinymce_init( $settings ) {
	$new_chars = json_encode( array(
		array( '0256', 'A - kahako' ),
		array( '0257', 'a - kahako' ),
		array( '0274', 'E - kahako' ),
		array( '0275', 'e - kahako' ),
		array( '0298', 'I - kahako' ),
		array( '0299', 'i - kahako' ),
		array( '0332', 'O - kahako' ),
		array( '0333', 'o - kahako' ),
		array( '0362', 'U - kahako' ),
		array( '0363', 'u - kahako' ),
		array( '0699', 'okina' ),
	) );
	$settings['charmap_append'] = $new_chars;

	return $settings;
}