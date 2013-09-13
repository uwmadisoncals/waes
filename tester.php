<?php
/**
 * Template Name: Tester
 * @package WordPress
 * @subpackage CALSv1
 */

get_header(); ?>

<div class="mobileScroll">
  <a href="#" class="mobileNavTriggerLarge" style="display: none;"></a> 
 
  <div id="main">

		<div id="primary">
			
			<div id="content" role="main">
			
				<!-- Start the Loop. -->
				<?php if ( have_posts() ) : while ( have_posts() ) : 
					the_title();
					the_time();
					the_category();
					the_post(); 
					the_content();
				?>  
			            

			        <?php endwhile; ?>

			    <?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>