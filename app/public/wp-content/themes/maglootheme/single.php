<?php
global $post;
get_header();
?>

<article class="article">
    <div class="container">
        <div class="article-title">
            <?php echo the_title('<h1>','</h1>'); ?>
        </div>
        <div class="article-text">
            <?php echo the_content(); ?>
        </div>  
        
            <?php if(have_rows('multi_columns')) : ?>

              <div class="article-body-grid">

                    <?php while( have_rows('multi_columns')) : the_row(); 

                      $icon = get_sub_field('iconimage');
                    
                  ?>
              
                    <div class="article-card">
                      <div class="article-card-img">
                        <img srcSet="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                      </div>
                      <h5 class="article-card-title"><?php the_sub_field('title'); ?></h5>
                      <p class="article-card-text"><?php the_sub_field('description'); ?></p>
                    </div>
        
                    <?php endwhile; ?>
        
                  </div>
        
              <?php endif; ?>
        

    </div>
</article>

<section class="other-news">
    <div class="container">
      <h3 class="other-news-title">Our Other News Items</h3>
      <div class="our-news-grid">
        
        <?php query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => 2));
        if (have_posts()) :
            while (have_posts()) : the_post(); 
              
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
    </div>
  </section>
<?php get_footer(); ?>
