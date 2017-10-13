<?php 
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>

	<section class="mb-5"><!--GALLERY SECTION-->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center mt-5 mb-5"><?php the_title(); ?></h1>
				    <?php echo photo_gallery(4); ?>
				</div>
				
			</div><!--/row-->
		</div><!--/container-->
	</section>
       
<?php get_footer(); ?>

