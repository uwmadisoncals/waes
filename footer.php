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
		<div class="copyright">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/footercrest2.png" alt="University of Wisconsin Madison" align="center" />
        	<div>&copy;Copyright <?php echo date("Y"); ?> The Board of Regents of the University of Wisconsin System <a href="http://wisc.edu">University of Wisconsin-Madison</a></div>  
        </div>       
        
			<?php get_sidebar( 'footer' ); ?>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/min/master.min.js"></script>

</body>
</html>