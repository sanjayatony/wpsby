<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpsby
 */

?>

	</div><!-- #content -->
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>						
				</div><!-- /col-lg-4 -->				
				<div class="col-lg-4">
					<?php dynamic_sidebar( 'footer-2' ); ?>						
					
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>						
					
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
