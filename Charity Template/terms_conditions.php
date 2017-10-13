<?php 
/*
Template Name: Terms & conditions page
*/
?>

<?php get_header(); ?>

            
    <section class="mt-5 mb-5"><!--TERM & CONDTIONS PAGE SECTION-->
        <div class="container">
            <h1 class="text-center mt-5 mb-5"><?php the_title(); ?></h1>
            <div class="row"> 
                <div class="col-12"> 
                    <?php

                    $args = array(
                        'page_id' => '2038',
                    );

                    $wp_query = new WP_Query( $args );

                    if($wp_query->have_posts() ) : while ($wp_query->have_posts() ) : $wp_query->the_post();

                    ?>

                    <div class="col-md-6">
                        <p class="p-1">
                          <?php the_content(); ?>
                        </p>
                    </div>
                    
                    <?php endwhile;endif; ?>
                    <?php wp_reset_query(); ?>
                </div>                            
            </div>
        </div><!--/container-->
    </section>

<?php get_footer(); ?>