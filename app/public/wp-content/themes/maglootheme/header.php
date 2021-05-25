<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part( 'template-parts/meta' ); ?>
    <?php wp_head(); 
    $logo = get_field('site_logo', 'option');
    ?>
</head>


<body <?php body_class(); ?>>
    <nav id="navigation"
        class="<?php if(is_user_logged_in()) : echo 'navigation-logged-in'; else : echo 'navigation-menu'; endif; ?>">
        <div class="container-xl">
            <div class="navbar">
                <a href="/" class="navbar-logo"><img src="<?php echo esc_url( $logo['url']); ?>"
                        alt="<?php echo esc_attr( $logo['alt']); ?>"></a>
                <?php wp_nav_menu(
                            array(
                                'menu' => 'top-menu',
                                'theme_location'  => 'primary',
                                'container'       => 'ul',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'navbar-links',
                                'depth' => 1,
                                'add_li_class'  => 'navbar-links-link' 
                            )
                        ); 
                    ?>
                <div class="toggle"><span class="bars"></span></div>
                <a href="https://www.opentable.co.uk/restref/client/?rid=184452&restref=184452&partysize=2&datetime=2020-09-10T19%3A00&lang=en-GB&r3uid=LwoE6jfA0&ot_source=Restaurant%20website&corrid=d36390bb-a25a-452a-928f-c30cf003e8a4"
                    class="btn primary-btn">Book Now</a>
            </div>
        </div>
    </nav>