 <?php 
/*
Template Name: Volunteer page
*/
?> 

<?php get_header(); ?>

            
    <section class="mt-5 mb-5"><!--VOLUNTEER SECTION-->
        <div class="container">
            <div class="row">
                <div class="col-7 p-4">
                    <?php

                    $args = array(
                        'page_id' => '2013',
                    );

                    $wp_query = new WP_Query( $args );

                    if($wp_query->have_posts() ) : while ($wp_query->have_posts() ) : $wp_query->the_post();

                    ?>
                    <h1 class="text-center mt-5 mb-5"><?php the_title(); ?></h1>
                    <div class="row"> 
                        <p>
                          <?php the_content(); ?>
                        </p>
                    </div>

                    <?php endwhile;endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <div class="col-4 mt-5 p-5">
                    <img src="http://placeimg.com/450/450/any" alt="">
                </div>
            </div>
         </div><!--/container-->
    </section>
            
<?php get_footer(); ?>            