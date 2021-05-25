<?php
/**
 * Template Name: Homepage
 *
 */

global $post;
get_header();

$social = get_field('social_media_links_footer', 'option');
$hero = get_field('hero_section');
$about = get_field('about_section');
$chef = get_field('chef_section');
$menu = get_field('menu_section');
$review = get_field('review_section');
$news = get_field('news_section');
?>

<section class='hero'>
    <img srcset='<?php echo esc_url( $hero['background_image']['url']); ?>' class='bg-image'
        alt='<?php echo esc_attr( $hero['background_image']['alt'] ); ?>' />
    <div class='container-xl'>
        <div class='hero-grid'>
            <div class='left-side'>
                <div class='line'></div>
                <div class='social-media-icons'>

                    <a
                        href='<?php echo esc_url($social['social_media_link_1']); ?>'><?php echo $social['social_media_icon_1']; ?></a>
                    <a
                        href='<?php echo esc_url($social['social_media_link_2']); ?>'><?php echo $social['social_media_icon_2']; ?></a>
                    <a
                        href='<?php echo esc_url($social['social_media_link_3']); ?>'><?php echo $social['social_media_icon_3']; ?></a>
                </div>
            </div>

            <div class='main-text'>
                <p class='above-title'><?php echo $hero['above_title']; ?></p>
                <h1 class='hero-title'><?php echo $hero['title']; ?></h1>
                <p class='lead-text'><?php echo $hero['paragraph_text']; ?> </p>
                <a href='<?php echo $hero['button']['url']; ?>' class='btn primary-btn'>
                    <?php echo $hero['button']['title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class='about-us'>
    <div class='container'>
        <div class='about-us-grid'>
            <div class='about-us-content'>
                <div class='about-us-content-image'>
                    <img srcset='<?php echo esc_url( $about['image']['url'] ); ?>'
                        alt='<?php echo esc_attr( $about['image']['alt'] ); ?>' />
                </div>
                <div class='about-us-content-main-text'>
                    <p class='above-title'><?php echo $about['above_title']; ?></p>
                    <h2 class='about-us-title'><?php echo $about['title']; ?></h2>
                    <p class='lead-text'><?php echo $about['paragraphtext']; ?></p>
                    <a href='<?php echo $about['button']['url']; ?>' class='btn btn-outlined'>
                        <?php echo $about['button']['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class='chef' style='background-color: <?php echo $chef['background_color']; ?>'>
    <div class='chef-left-side'>
        <div class='chef-main-text'>
            <p class='above-title-secondary'>
                <?php echo $chef['above_title']; ?>
            </p>
            <h2 class='chef-title'><?php echo $chef['title']; ?></h2>
            <p class='lead-text'><?php echo $chef['paragraph_text_']; ?></p>
            <a href='<?php echo $chef['button_']['url']; ?>' class='btn btn-outlined-secondary'>
                <?php echo $chef['button_']['title']; ?>
            </a>
        </div>
    </div>
    <div class='chef-right-side'>
        <img srcset='<?php echo esc_url( $chef['image_on_the_right']['url']); ?>'
            alt='<?php echo esc_attr( $about['image_on_the_right']['alt']); ?>' class='chef-right-side-img' />
    </div>
</section>

<section class='menu'>
    <div class='container-xl'>
        <div class='menu-grid'>
            <div class='menu-cards'>
                <?php if(have_rows('menu_section')):?>

                <?php while( have_rows('menu_section')): the_row(); 

                if( have_rows('our_food_menu_items')) : ?>

                <?php while( have_rows('our_food_menu_items')): the_row();
                  
                  $bgImage = get_sub_field('menu_item_background_image'); 
                  $link = get_sub_field('menu_item_link'); 
                ?>
                <a href='<?php echo $link['url']; ?>'>
                    <div class='menu-card'>
                        <img srcset='<?php echo esc_url($bgImage['url']); ?>'
                            alt='<?php echo esc_attr($bgImage['alt']); ?>' />
                        <div class='half-circle'>
                            <h4 class='half-circle-title'>
                                <?php the_sub_field('menu_item_title'); ?>
                            </h4>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class='menu-main-text'>
                <p class='above-title'>
                    <?php echo $menu['our_food_above_title']; ?>
                </p>
                <h2 class='menu-title'><?php echo $menu['our_food_title']; ?></h2>
                <p class='lead-text'>
                    <?php echo $menu['our_food_paragraph_text']; ?>
                </p>
                <a href='<?php echo $menu['our_food_button']['url']; ?>' class='btn btn-outlined'>
                    <?php echo $menu['our_food_button']['title']; ?>
                </a>
            </div>

            <div class='menu-cards-reversed'>

                <?php if(have_rows('menu_section')):?>

                <?php while( have_rows('menu_section')): the_row(); 

                if( have_rows('our_drinks_menu_items')) : ?>

                <?php while( have_rows('our_drinks_menu_items')): the_row();
                   
                   $bgImage = get_sub_field('menu_item_background_image'); 
                   $link = get_sub_field('menu_item_link'); 
                 ?>
                <a href='<?php echo $link['url']; ?>'>
                    <div class='menu-card'>
                        <img srcset='<?php echo esc_url($bgImage['url']); ?>'
                            alt='<?php echo esc_attr($bgImage['alt']); ?>' />
                        <div class='half-circle'>
                            <h4 class='half-circle-title'>
                                <?php the_sub_field('menu_item_title'); ?>
                            </h4>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class='menu-main-text-reversed'>
                <p class='above-title'>
                    <?php echo $menu['our_drinks_above_title']; ?>
                </p>
                <h2 class='menu-title'><?php echo $menu['our_drinks_title']; ?></h2>
                <p class='lead-text'>
                    <?php echo $menu['our_drinks_paragraph_text']; ?>
                </p>
                <a href='<?php echo $menu['our_drinks_button']['url']; ?>' class='btn btn-outlined'>
                    <?php echo $menu['our_drinks_button']['title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>



<section class='reviews' style='background-color: <?php echo $review['background_color']; ?>'>
    <div class='container'>
        <div class='reviews-main-text'>
            <p class='above-title-centered'>
                <?php echo $review['above_title']; ?>
            </p>
            <h2 class='reviews-title'><?php echo $review['title']; ?></h2>
        </div>
        <div class='reviews-carousel'>



            <?php

            $posts = get_posts(array(
                'post_type' =>  'reviews'
            ));

            
          
          if($posts) : ?>

            <?php foreach( $posts as $post): ?>
            <?php if(have_rows('review_items')):?>

            <?php while( have_rows('review_items')): the_row(); 
            
                $avatar = get_sub_field('reviewer_avatar');
            ?>



            <div class='reviews-cards'>
                <div class='reviews-card'>
                    <img class='reviews-card-thumbnail' srcset='<?php echo esc_url($avatar['url']); ?>'
                        alt='<?php echo esc_url($avatar['alt']); ?>' />
                    <h5> <?php  the_sub_field('review_title'); ?></h5>
                    <p>
                        <?php the_sub_field('review_description'); ?>...
                        <!-- <a href='#' class='text-btn'>
                            Read More
                        </a> -->
                    </p>
                    <div class='reviewer'>
                        <?php the_sub_field('reviewer_name'); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<section class='our-news'>
    <div class='container'>
        <div class='our-news-main-text'>
            <p class='above-title-centered'>
                <?php echo $news['above_title']; ?>
            </p>
            <h2 class='our-news-title'><?php echo $news['title']; ?></h2>
        </div>
        <div class='our-news-grid'>
            <?php query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => 2));
        if (have_posts()) : while (have_posts()) : the_post(); 
        
   
        $post_id = get_the_id();
        $categories = get_the_category($post_id);
  
        
        ?>
            <a href="<?php echo get_the_permalink($post_id) ?>">
                <div class="our-news-card">
                    <div class="our-news-card-info">
                        <p class="above-title"><?php echo $categories[0]->name?></p>
                        <p class="date"><?php echo get_the_date() ?></p>
                    </div>
                    <div class="our-news-card-text">
                        <h3><?php echo get_the_title()?></h3>
                        <p><?php echo get_the_excerpt()?></p>
                    </div>
                </div>
            </a>

            <?php endwhile;
        endif; ?>
        </div>
        <div class='our-news-main-text'>
            <a href='<?php echo $news['button']['url']; ?>' class='btn btn-outlined'>
                <?php echo $news['button']['title']; ?>
            </a>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/subscribe' ); ?>

<?php get_footer(); ?>