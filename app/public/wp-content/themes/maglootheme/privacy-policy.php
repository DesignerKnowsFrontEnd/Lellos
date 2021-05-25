<?php
/**
 * Template Name: Privacy Policy
 *
 */

global $post;
get_header();
?>

<article class="article">
    <div class="container">
        <div class="article-left">
            <?php echo the_title('<h1>','</h1>'); ?>
        </div>
        <div class="article-left">
            <?php echo the_content(); ?>
        </div>
    </div>
</article>


<?php get_footer(); ?>