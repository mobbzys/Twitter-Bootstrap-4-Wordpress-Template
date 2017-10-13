<?php 

/*
Template Name: Application Forms

*PDF Form page. 
*****/

?>

<?php get_header(); ?>

            
    <section class="mt-5 mb-5"><!--PDF SECTION-->
        <div class="container">
            <h1 class="text-center mt-5 mb-5">PDF Application Forms</h1>

            <?php

            $args = array(
                'post_type' => 'pdf_forms'
            );
            $loop = new WP_query( $args ); 
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

            <div class="row"> 
                <div class="col-6"> 
                    <?php if( get_field('link_for_a_pdf_form_here') ): ?>

                        <a id="button-pdf" class="btn btn-primary" href="<?php the_field('link_for_a_pdf_form_here'); ?>" >Download File</a>

                    <?php endif; ?>                  
                </div>   
                <div class="col-4">
                  <h4><?php the_field('title_of_pdf_form'); ?></h4>
                  <p><?php the_field('pdf_form_description'); ?></p>
                </div>                            
            </div>
            <div class="underline"></div>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

         </div><!--/container-->
    </section>

<?php get_footer(); ?>