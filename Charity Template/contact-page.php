<?php 
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
 
 	<section><!--CHARITY SECTION-->
		<div class="container">
			<h1 class="text-center mt-5 mb-5"><?php the_title(); ?></h1>
				<div class="m-5">	
					<div class="row">
						<div class="col-6">
				 			<div><?php echo do_shortcode( '[contact-form-7 id="1992" title="Charity form"]' ) ;?>
							</div>
						</div>						
						<div class="col-6">
							<address class="ml-5">
								<strong>Goodly Dale Cottage Homes</strong><br>
							  	14, <br />
							  	Goodly Dale,<br />
							  	Windermere,<br />
							  	LA23 2JB<br />		
							  	<br />					  
							  	<abbr title="Phone"></abbr>015394 48363</address>
							  	<div class="col-4 pt-5">
				 					<?php echo do_shortcode( '[wpgmza id="1"]' ) ;?>
								</div>
						</div>						
					</div><!--/row-->
				</div>				
		</div><!--/container-->
	</section>










       
<?php get_footer(); ?>