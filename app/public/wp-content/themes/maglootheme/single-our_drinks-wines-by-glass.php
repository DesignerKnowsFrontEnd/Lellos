<?php
/**
 * Template Name: Wines By Glass
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
                <h3 class='above-title'><?php echo __('Our Drinks', 'theme'); ?></h3>
            </div>
        </div>
    </div>
</section>

<div class="tabs">
    <?php 
        wp_nav_menu(
            array(
                'menu' => 'sub-nav',
                'theme_location'  => 'drinks-menu',
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
            <div class="tabs-drinks-title">
                <h2><?php echo get_the_title() ?></h2>
            </div>
            <?php 
                    if(have_rows('drinks_category')):
                        while( have_rows('drinks_category')): the_row();                 
            ?>
            <div class="tabs-subtitle">
                <h4 class='sub-heading'><?php the_sub_field('drinks_category_title'); ?></h4>
            </div>

            <div class="tabs-food-cards">
                <?php 
                    if(have_rows('drinks_items')):
                        while( have_rows('drinks_items')): the_row();                 
                ?>

                <div class="tabs-food-card">
                    <div class="tabs-food-title">
                        <h5><?php the_sub_field('drinks_item_title'); ?></h5>
                    </div>
                    <div class="tabs-food-description">
                        <p><?php  the_sub_field('drinks_item_description'); ?></p>
                    </div>
                    <div class="tabs-wine-prices">
                        <p class="tabs-wine-volume">250ml</p>
                        <p class="tabs-wine-price">£<?php the_sub_field('two_fifty_ml__drinks_item_price'); ?></p>
                    </div>
                    <div class="tabs-wine-prices">
                        <p class="tabs-wine-volume">175ml</p>
                        <p class="tabs-wine-price">£<?php the_sub_field('one_seventy_five_ml_drinks_item_price'); ?></p>
                    </div>
                    <div class="tabs-wine-prices">
                        <p class="tabs-wine-volume">125ml</p>
                        <p class="tabs-wine-price">
                            £<?php the_sub_field('one_hundred_twenty_five__ml_drinks_item_price'); ?></p>
                    </div>
                </div>
                <?php endwhile;
                    endif; ?>

            </div>
            <?php 
                        endwhile;
                    wp_reset_postdata();
                endif; ?>
        </div>
    </div>
</div>
<?php get_template_part( 'template-parts/subscribe' ); ?>
<?php get_footer(); ?>