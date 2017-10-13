<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<section class="mt-5 mb-5"><!--TOP SECTION-->
		<div class="container">

			<?php

            $args = array(
                'page_id' => '1986',
            );

            $wp_query = new WP_Query( $args );

            if($wp_query->have_posts() ) : while ($wp_query->have_posts() ) : $wp_query->the_post();

            ?>

			<h1 class="text-center mt-5 mb-5"><?php the_title(); ?></h1>
				<div class="row">
					<div class="col-md-6">
						<img class="img-fluid" src="http://placeimg.com/450/450/any"/>
					</div>
					<div class="col-md-6">
						<p class="p-1">
						  <?php the_content(); ?>
						</p>
					</div>
				</div><!--/row-->              

            </div>
            <?php endwhile;endif; ?>
            <?php wp_reset_query(); ?>

		</div><!--/container-->
	</section>

	<section class="mt-5 mb-5"><!--CARD BOXES-->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card-deck">
					    <div class="card" style="width: 20rem;">
					    	<a href="#"><img class="card-img-top" src="http://placeimg.com/318/180/any" alt="Card image cap"></a>
					    	<h4 class="card-header text-center">Get Involed</h4>
					    	<div class="card-body">	
							  <div class="card-block">
							    <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    
							  </div>
							</div>  
						</div>
					</div>	
				</div>
				<div class="col-md-4">
					<div class="card-deck">
					    <div class="card" style="width: 20rem;">
					    	<a href="#"><img class="card-img-top" src="http://placeimg.com/318/180/any" alt="Card image cap"></a>
					    	<h4 class="card-header text-center">Gallery</h4>
					    	<div class="card-body">								  
							  	<div class="card-block">
							   		<p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>						    
							 	 </div>
							</div>  
						</div>
					</div>				
				</div>
				<div class="col-md-4">
					<div class="card-deck">
					    <div class="card" style="width: 20rem;">
					    	<a href="#"><img class="card-img-top" src="http://placeimg.com/318/180/any" alt="Card image cap"></a>
					    	<h4 class="card-header text-center">Learn</h4>
					    	<div class="card-body">	
							 	<div class="card-block">
							  		<p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					 	    	 </div>
							</div>  
						</div>
					</div>	
				</div>	
			</div><!--/row-->
		</div><!--/container-->
	</section>

	<section class="mt-5 mb-5 events-bk"><!--EVENTS-->
		<div class="container">
			<h4 class="m-2 p-4 events-title ">Events</h4>
				 	
		    <?php 

        		$args = array( 'post_type' => 'events', 'posts_per_page' => 2 );
				$the_query = new WP_Query( $args ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<div class="m-2">	
						<div class="card" style="width: 20rem;">
		 					<div class="card-body">	
                		  		<div class="card-block">
								    <h4 class="card-title"><?php the_field('title'); ?></h4>
								    <h6 class="card-subtitle mb-2 text-muted"><?php the_field('date_of_event'); ?></h6>
								    <p class="card-text"><?php the_field('description_of_the_event'); ?></p>
								    <a href="#" class="btn btn-primary">Go somewhere</a>
						  		</div> 
							</div>	
           				</div>
           			</div>		                       
        	
       		<?php endwhile; endif; ?> 
	               						
		</div><!--/container-->
	</section>

	<section class="mt-5 mb-5"><!--BREAK SECTION-->
		<div class="container">
			<div class="p-5">
  				<h1 class="display-4 text-center">Help us, get involed</h1>
  				<p class="lead text-center">Donate or volunteer you time, look below to see how and why you should help our good cause.</p>
			</div>
		</div><!--/container-->
	</section>

	<section class="mx-auto mt-5 mb-5"><!--DONATE SECTION-->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card-deck">
					    <div class="card card-bottom p-3" style="width: 20rem;">
					    	<h4 class="card-header text-center">Donate</h4>
					    	<div class="card-body">	
								<div class="card-block">
							    	<p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							 	   	<div class="text-center">
							 	   		<a href="/index.php?page_id=2011" class="btn btn-primary">Donate</a>
							 	   	</div>	
							  </div>
							</div>  
						</div>
					</div>	
				</div>	
				<div class="col-md-4">
					<div class="card-deck">
					    <div class="card card-bottom p-3" style="width: 20rem;">
					    	<h4 class="card-header text-center">Volunteer</h4>
					    	<div class="card-body">	
							  	<div class="card-block">
							   		<p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    	<div class="text-center">
							 	   		<a href="/index.php?page_id=2011" class="btn btn-primary">Volunteer</a>
							 	   	</div>	
							    </div>
							</div>  
						</div>
					</div>	
				</div>
				<div class="col-md-4">
					<div class="card-deck">
					    <div class="card card-bottom p-3" style="width: 20rem;">
					    	<h4 class="card-header text-center">Application for Cottages</h4>
					    	<div class="card-body">	
							  	<div class="card-block">
							   		<p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    	<div class="text-center">
							 	   		<a href="/index.php?page_id=2034" class="btn btn-primary">Application forms</a>
							 	   	</div>	
							    </div>
							</div>  
						</div>
					</div>	
				</div>		
			</div><!--/row-->
		</div><!--/container-->
	</section>

<?php get_footer(); ?>


           
