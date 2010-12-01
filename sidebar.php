<?php
/**
 * @package WordPress
 * @subpackage mm-base
 */
?>

<div class="sidebar aside grid_6">
	<ul>
	    <?php /* if using widgets */
	        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	    <?php endif; ?>
	    
	    <?php wp_list_pages(); ?>
	    
	    <?php wp_meta(); ?>
	</ul>
</div>


