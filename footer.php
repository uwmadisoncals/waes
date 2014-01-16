<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="ieFooter">
		<div class="inner">
			<div id="pre-footer">
			<div class="linksContainer">
			<h3>Resources</h3>
        	<ul id="quick_links">
            	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>
       	      </li>
<!--             	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>
            	</li> -->
            	                              
            </ul>
            <div class="clearfix"></div>
			</div>
			
			<div class="linksContainer right">
				<!-- <h3>Support</h3>
				<p>You can help support the College of Agricultural &amp; Life Sciences by making a gift to the 
University of Wisconsin Foundation.</p>
				<a href="http://supportuw.org/giveto/cals" class="button">Make a Gift</a>
				<p class="address">College of Agriculture and Life Sciences | 1450 Linden Drive | Madison, WI 53706 | 608.262.1251 | <a href="mailto:info@cals.wisc.edu">info@cals.wisc.edu</a></p>
			</div> -->
			<div class="clearfix"></div>
        </div>
        
        <div class="copyright">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/footercrest2.png" alt="University of Wisconsin Madison" align="center" />
        	<div>&copy;Copyright 2013 The Board of Regents of the University of Wisconsin System <a href="http://wisc.edu">University of Wisconsin-Madison</a></div>
	        
	        
	       
        </div>
			<div class="clearfix"></div>
        </div>
        
        
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */
				
					get_sidebar( 'footer' );
			?>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/min/master.min.js"></script>

<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/snowfeature.js"></script>-->

</body>
</html>