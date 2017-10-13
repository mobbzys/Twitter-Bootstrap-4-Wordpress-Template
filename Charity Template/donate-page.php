 <?php 
/*
Template Name: Donate page
*/
?>

<?php get_header(); ?>

            
    <section class="mt-5 mb-5"><!--DONATE SECTION-->
        <div class="container">

            <?php

            $args = array(
                'page_id' => '2011',
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

         </div><!--/container-->
    </section>

<?php get_footer(); ?>