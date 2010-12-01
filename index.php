<?php
/**
 * @package WordPress
 * @subpackage mm-base
 */

get_header(); ?>
	    		
		<div class="main section grid_10">
		
		    <?php if (have_posts()) : ?>
		
		        <?php while (have_posts()) : the_post(); ?>
		
		        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		            <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		            <div class="byline">
		            	<span class="time"><?php the_time('F jS, Y') ?></span> 
		            	<span class="name"> <?php the_author() ?></span> 
		            </div>
		
		            <div class="entry">
		                <?php the_content('Read the rest of this entry &raquo;'); ?>
		            </div>
		
		            <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		        </div>
		
		        <?php endwhile; ?>

		    </div>
		
		    <?php else : ?>
		    
		        <h2>Not Found</h2>
		        <p>Sorry, but you are looking for something that isn't here.</p>
		        <?php get_search_form(); ?>
		
		    <?php endif; ?>
		
	<div class="sidebar aside grid_6">
	    <?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
                