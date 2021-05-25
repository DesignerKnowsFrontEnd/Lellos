<?php

/**
 * Template Name: Open Table
 * 
 *
 */

global $post;
get_header();

?>

<section class='breadcrumbs bg-1'>
    <div class='container'>
        <div class='breadcrumbs-flex'>
            <div class='breadcrumbs-info'>
                <h3 class='above-title'>Book Now</h3>
            </div>
        </div>
    </div>
</section>

<article class='article'>
    <div class='container'>
        <div class='article-title'></div>
        <div class='article-text'>
            <!-- <div id='ot-widget-container6' data-r3uid='D3bQpM88V'>
                <iframe
                    src='https://www.opentable.com/widget/reservation/canvas?rid=184452&amp;type=standard&amp;theme=tall&amp;overlay=false&amp;domain=com&amp;lang=en-US&amp;r3uid=D3bQpM88V&amp;newtab=false&amp;disablega=false&amp;ot_source=Restaurant%20website'
                    width='288' height='490' frameborder='0' scrolling='no' name='opentable-make-reservation-widget'
                    title="Online Reservations | OpenTable, Lello's Italian Restaurant and Bar"></iframe>
            </div> -->
            <script type='text/javascript'
                src='//www.opentable.co.uk/widget/reservation/loader?rid=184452&type=standard&theme=standard&iframe=true&domain=couk&lang=en-GB&newtab=true&ot_source=Restaurant%20website'>
            </script>
        </div>
    </div>
</article>

<?php get_template_part( 'template-parts/subscribe' ); ?>
<?php get_footer(); ?>