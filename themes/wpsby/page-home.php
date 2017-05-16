<?php
/**
 * Template Name: Home
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="ww">
		    <div class="container">
					<div class="row">
						<?php	while ( have_posts() ) : the_post(); ?>
						<div class="col-lg-8 col-lg-offset-2 centered">
							<?php the_post_thumbnail();?>
							<?php the_content();?>						
						</div><!-- /col-lg-8 -->
					<?php endwhile;?>
					</div><!-- /row -->
		    </div> <!-- /container -->
			</div><!-- /ww -->

			<div class="container pt">
				<div class="row mt centered">	
					<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>				
							<div class="col-lg-4">
								<a class="zoom green" href="<?php the_permalink();?>">
									<?php the_post_thumbnail('full',array('class' => 'img-responsive'));?>
								</a>
								<p><?php the_title();?> <br><?php the_field('url');?></p>
							</div>
						<?php endwhile;?>
				</div><!-- /row -->
			</div><!-- /container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
