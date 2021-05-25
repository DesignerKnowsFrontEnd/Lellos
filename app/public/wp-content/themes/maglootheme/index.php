<?php

global $post;
$bread = get_field('breadcrumbs_background_images', 'option');
get_header();
?>



<?php
if ( have_posts() ) :

	if ( is_home() && ! is_front_page() ) :
		?>
<section class='breadcrumbs'>
    <div class='container'>
        <div class='breadcrumbs-flex'>
            <div class='breadcrumbs-info'>
                <h3 class='above-title'><?php single_post_title(); ?></h3>
            </div>
        </div>
    </div>
</section>


<main>
    <div class="container">
        <div class="our-news-grid">
            <?php
			endif;


			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        </div>
        <div class="our-news-main-text">
            <?php the_posts_pagination( array(
				'class' => 'pagination',
				'screen_reader_text' => ' ', 
				'prev_text'          => __( 'Previous', 'theme' ),
				'next_text'          => __( 'Next', 'theme' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'theme' ) . ' </span>',
			) ); ?>
        </div>
    </div>
</main><!-- #main -->

<?php

get_footer();