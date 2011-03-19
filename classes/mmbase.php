<?php
/**
 * MMBase - core of Mister Machine Base Theme
 *
 * @package WordPress
 * @subpackage mm-base
 */

/**
 * class MMBase
 * 
 * @since 0.1
 */
class MMBase {
	
	/**
	 * init() Initialisation method which calls all other methods in turn.
	 *
	 * @since 0.1
	 */
	function init() {		
		$theme = new MMBase;
		$theme->enviroment();
		do_action( 'framework_init' );
	}
	
	/**
	 * enviroment() defines MM Base directory constants
	 *
	 * @since 0.1
	 */
	function enviroment() {	
		define( 'CSS', get_bloginfo('template_directory') . '/assets/css', true );
		define( 'IMAGES', get_bloginfo('template_directory') . '/assets/img', true );
		define( 'JS', get_bloginfo('template_directory') . '/assets/js', true );
		
		// URI shortcuts
		define( 'THEME', get_bloginfo( 'template_url' ), true );
		
		do_action( 'enviroment' ); // Available action: load_enviroment
	}

} // end of MMBase;
?>