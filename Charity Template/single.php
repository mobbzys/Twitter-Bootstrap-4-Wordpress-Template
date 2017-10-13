
<?php get_header(); ?>
	
	<div class="container">

		<section><!--BLOG SECTION-->
			<div class="container">
				<div class="mt-5">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<img src=""><?php the_post_thumbnail( array (650, 650) ); ?>						
						<h1 class="blog-title pt-3"><?php the_title() ;?></h1>
						<div class="blog-main">
							<div class="blog-post">
								<p><?php the_content(); ?></p>
							</div>	
						</div>				

				<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

				</div>		
			</div><!--/container-->
		</section>	

		<!-- <nav class="mb-5 pl-4">
			<div class="btn btn-outline-primary"><?php previous_post(); ?></div>
			<div class="btn btn-outline-primary"><?php next_post(); ?></div>
		</nav>	 -->

	</div>	



<?php get_footer(); ?>

