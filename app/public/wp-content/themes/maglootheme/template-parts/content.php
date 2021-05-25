<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lellos_Theme
 */
$categories = get_the_category($post_id);
?>
<a href="<?php echo esc_url(get_the_permalink($post_id)) ?>">
    <div class="our-news-card">
        <div class="our-news-card-info">
            <p class="above-title"><?php echo $categories[0]->name?></p>
            <p class="date"><?php echo get_the_date() ?></p>
        </div>
        <div class="our-news-card-text">
            <?php
				the_title( '<h3>', '</h3>' );
				the_excerpt();

			
			?>
        </div><!-- .our-news-text -->

    </div><!-- .our-news-card -->
</a><!-- .closing a -->