<?php

/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	 <section class="mt-5 mb-5"><!--404 PAGE-->
        <div class="container">
			<h2><?php _e( 'Ahh, sorry...' ); ?></h2>           
           	<p><?php _e( 'nothing found here. Maybe try a search?' ); ?></p>
			<?php get_search_form(); ?>
        </div><!--/container-->
    </section>

<?php get_footer(); ?>