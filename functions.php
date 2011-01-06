<?php
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
 * Add site scripts to the head of the theme
 * @access public
 * @return void
 */
function add_site_scripts() {

	if (!is_admin()) {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'modernizr', JS . '/modernizr-1.6.min.js', array('jquery') );
		wp_enqueue_script( 'app', JS . '/app.js', array('jquery') );
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

?>