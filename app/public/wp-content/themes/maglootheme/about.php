<?php

/**
 * Template Name: About Us
 *
 */

global $post;
get_header();
$bread = get_field('breadcrumbs_background_images', 'option');
$firstImage  = get_field('first_image');
$secondImage = get_field('second_image');
$thirdImage  = get_field('third_image');
?>

<section class='breadcrumbs'>
    <div class='container'>
        <div class='breadcrumbs-flex'>
            <div class='breadcrumbs-info'>
                <h3 class='above-title'><?php echo get_the_title() ?></h3>
            </div>
        </div>
    </div>
</section>

<main>
    <div class='container'>
        <div class='two-columns'>
            <div class='col-text'>
                <h2><?php the_field('first_title'); ?></h2>
                <p class='lead-text-2'>
                    <?php the_field('first_paragraph'); ?>
                </p>
            </div>
            <div class='col-image'>
                <img class='object-fit-cover' srcset='<?php echo esc_url($firstImage['url']); ?>'
                    alt='<?php echo esc_attr($firstImage['alt']); ?>' />
            </div>
            <div class='col-text col-text-alt'>
                <h2><?php the_field('second_title'); ?></h2>
                <p class='lead-text-2'>
                    <?php the_field('second_paragraph'); ?>
                </p>
            </div>
            <div class='col-image col-image-alt'>
                <img class='object-fit-cover' srcset='<?php echo esc_url($secondImage['url']); ?>'
                    alt='<?php echo esc_attr($secondImage['alt']); ?>' />
            </div>
        </div>
    </div>
</main>

<section class='chef-bio'>
    <div class='container'>
        <div class='two-columns'>
            <div class='col-text nmt-130'>
                <h2><?php the_field('third_title'); ?></h2>
                <p class='lead-text'>
                    <?php the_field('third_paragraph'); ?>
                </p>
            </div>
            <div class='col-standout-image'>
                <img class='object-fit-cover' srcset='<?php echo esc_url($thirdImage['url']); ?>'
                    alt='<?php echo esc_attr($thirdImage['alt']); ?>' />
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/subscribe' ); ?>
<?php get_footer(); ?>