<?php
/**
 * @package WordPress
 * @subpackage mm-base
 */

get_header(); ?>

	<div id="p-about" class="">
	
	<div id="side-pic" class="sidebar grid_6">
	   <div class="shadow">
	       <div class="inner">
	           <div class="shadow-img cast">

	           </div>
	       </div>
	   </div>
	</div>
	    		
		<div class="main grid_10">
		
		    <?php if (have_posts()) : ?>
		
		        <?php while (have_posts()) : the_post(); ?>
		
		        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		            <h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
		            <?php the_time('F jS, Y') ?> 
		            <?php the_author() ?>
		
		            <div class="entry">
		                <?php the_content('Read the rest of this entry &raquo;'); ?>
		            </div>
		
		            <!--<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>-->
		        </div>
		
		        <?php endwhile; ?>

		    </div>
		
		    <?php else : ?>
		    
		        <h2>Not Found</h2>
		        <p>Sorry, but you are looking for something that isn't here.</p>
		        <?php get_search_form(); ?>
		
		    <?php endif; ?>
		
	</div>

<?php get_footer(); ?>
                