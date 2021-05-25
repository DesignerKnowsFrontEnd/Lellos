<?php
/**
 * Template Name: Our Food
 * 
 *
 */
global $post;
$bread = get_field('breadcrumbs_background_images', 'option');
get_header();
?>

<section class='breadcrumbs'>
    <div class='container'>
        <div class='breadcrumbs-flex'>
            <div class='breadcrumbs-info'>
                <h3 class='above-title'><?php echo __('Our Food', 'theme'); ?></h3>
            </div>
        </div>
    </div>
</section>

<div class="tabs">
    <?php 
        wp_nav_menu(
            array(
                'menu' => 'sub-nav',
                'theme_location'  => 'food-menu',
                'container'       => 'ul',
                'container_class' => '',
                'container_id'    => 'sub-nav',
                'menu_class'      => 'tabs-list tabs-scroll',
                'depth' => 1,
                'add_li_class'  => 'tabs-li',
            )
        ); 
    ?>
    <div class="container">
        <div class="tabs-content">
            <div class="tabs-title">
                <h2><?php echo get_the_title() ?></h2>
            </div>

            <div class="tabs-food-cards">
                <?php 
                    if(have_rows('food_category')):
                        while( have_rows('food_category')): the_row();                 
                ?>

                <div class="tabs-food-card">
                    <div class="tabs-food-title">
                        <h5><?php the_sub_field('food_item_title'); ?></h5>
                        <p>£<?php  the_sub_field('food_item_price'); ?></p>
                    </div>
                    <div class="tabs-food-description">
                        <p><?php  the_sub_field('food_item_description'); ?></p>
                    </div>
                </div>
                <?php 
                        endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'template-parts/subscribe' ); ?>
<?php get_footer(); ?>