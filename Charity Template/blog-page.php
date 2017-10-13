<?php 
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
	
	<section class="mt-5 mb-5"><!--BLOG SECTION-->
		<div class="container">
			<h1 class="text-center">Blog</h1>
				<div class="row">
					<div class="col-md-6 blog-main">
						<div class="blog-post">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									
										<img src=""><?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
										<h2 class="blog-post-title"><?php the_title() ;?></h2>
										<p class="blog-post-meta"><?php the_time('F j, Y'); ?></p>
										<p><?php the_excerpt() ;?></p> 				

							<?php endwhile; else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div><!--/row-->
		</div><!--/container-->
	</section>

<?php get_footer(); ?>

