<?php

/**
 * Template Name: Contact Us
 *
 */

global $post;
get_header();
$bread = get_field('breadcrumbs_background_images', 'option');
$info = get_field('information_fields');
$social = get_field('social_media_links_footer', 'option');
$contact = get_field('contact_form_fields');
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
            <div class='col-text-expanded'>

                <div class='contact-text center-sm'>
                    <a href="https://www.opentable.co.uk/restref/client/?rid=184452&restref=184452&partysize=2&datetime=2020-09-10T19%3A00&lang=en-GB&r3uid=LwoE6jfA0&ot_source=Restaurant%20website&corrid=d36390bb-a25a-452a-928f-c30cf003e8a4"
                        class="btn primary-btn">Book Now</a>
                </div>

                <div class='contact-text expanded center-sm'>
                    <h3><?php echo $info['first_title']; ?></h3>
                    <p>
                        <?php echo $info['first_paragraph']; ?>
                    </p>
                </div>

                <div class='contact-text center-sm'>
                    <h3><?php echo $info['second_title']; ?></h3>
                    <p>
                        <?php echo $info['second_paragraph']; ?>
                    </p>
                </div>

                <div class='contact-text expanded center-sm'>
                    <h3><?php echo $info['third_title']; ?></h3>
                    <p>
                        <?php echo $info['third_paragraph']; ?>
                    </p>
                    <div class='social-media-icons-horz'>
                        <a
                            href='<?php echo esc_url($social['social_media_link_1']); ?>'><?php echo $social['social_media_icon_1']; ?></a>
                        <a
                            href='<?php echo esc_url($social['social_media_link_2']); ?>'><?php echo $social['social_media_icon_2']; ?></a>
                        <a
                            href='<?php echo esc_url($social['social_media_link_3']); ?>'><?php echo $social['social_media_icon_3']; ?></a>
                    </div>
                </div>

            </div>

            <div class='col-form'>
                <div class='contact-form'>
                    <h3 class='above-title-centered'>
                        <?php echo $contact['above_title']; ?>
                    </h3>
                    <h2 class='form-title mb-60'>
                        <?php echo $contact['title']; ?>
                    </h2>
                    <?php echo $contact['form']; ?>
                </div>

            </div>
        </div>
    </div>
</main>

<?php get_template_part( 'template-parts/subscribe' ); ?>
<?php get_footer(); ?>