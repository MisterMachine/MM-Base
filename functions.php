<?php
/**
 * @package WordPress
 * @subpackage 
*/

require_once('classes/mmbase.php');
MMBase::init();

/**
* add_site_styles function.
* Add site styles to the head of the theme
* @access public
* @return void
*/	
function add_site_styles(){

	wp_enqueue_style('reset', CSS . '/reset.css');	
	wp_enqueue_style('text', CSS . '/text.css');
	wp_enqueue_style('960', CSS . '/960.css');
	wp_enqueue_style('theme', CSS . '/theme.css');
}

/**
 * add_site_scripts function.
 * Add site scripts to the theme. Most will go in Footer for fastest loading.
 * @access public
 * @return void
 */
function add_site_scripts() {

	if (!is_admin()) {
		wp_enqueue_script( 'modernizr', JS . '/modernizr-1.6.min.js', array('jquery') ); // keep modernizer in header
		wp_enqueue_script( 'jquery', 'ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js', array(), FALSE, TRUE ); // Load jQuery from Google CDN
		wp_enqueue_script( 'jquery', FALSE, array(), FALSE, TRUE ); // Fall back to local copy of jQuery if neccessary
		wp_enqueue_script( 'app', JS . '/app.js', array('jquery'), FALSE, TRUE );
	}

}

/**
 * new_excerpt_more function.
 * Over write the default WordPres [...] with anything you like.
 * @access public
 * @return void
 */
function new_excerpt_more($more) {
	return '...';
}

// Add Theme style sheets
add_action('wp_print_styles', 'add_site_styles');

// Add Theme Scripts
add_action('wp_print_scripts', 'add_site_scripts');

// Modify the default expert more symbol
add_filter('excerpt_more', 'new_excerpt_more');

?>