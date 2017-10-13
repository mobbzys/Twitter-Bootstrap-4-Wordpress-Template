<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

 	<section class="mt-5 mb-5"><!--SearchBar-->
		<div class="container">
			<div class="row">
				<div class="col-12">


				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>
				    

					



				<?php endwhile; else : ?>
					<div class="m-5">
						<h2>Oops...</h2>	
						<h6><?php _e( 'Sorry, but no matches were found for your seach please try again below.' ); ?>
						</h6>
					</div>	
				<?php endif; ?>
				
					<div class="m-5">
						<?php
							get_search_form();
						?>		
					</div>
				</div>				
			</div><!--/row-->
		</div><!--/container-->
	</section>
       
<?php get_footer(); ?>