<?php 
// acf field

$logo = get_field('site_logo', 'option'); 
$social = get_field('social_media_links_footer', 'option');
$copy = get_field('copyright_information', 'option');
?>


<footer class='footer'>
    <div class='container'>
        <div class='footer-grid'>
            <div class="col-middle">
                <div class="middle">
                    <a href="/" class="navbar-logo"><img src="<?php echo esc_url( $logo['url']); ?>"
                            alt="<?php echo esc_attr( $logo['alt']); ?>"></a>
                    <div class="footer-navbar">
                        <?php wp_nav_menu(
                    array(
                        'menu' => 'Footer Menu', 'container'       => 'ul', 'container_class' => '', 'container_id'    => '', 'menu_class'      => 'footer-links', 'depth' => 1, 'add_li_class'  => 'footer-link'
                    )
                );
                ?>

                    </div>
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
        </div>
    </div>
</footer>

<div class='copyright'>
    <div class='container'>
        <div class='copyright-flex'>
            <p class='contact-info'>
                <?php echo $copy; ?>
                <a href='/privacy-policy'>Privacy Policy</a>
            </p>
            <a href='#' class='btn btn-bttop'>
                <i class='fas fa-chevron-up'></i>
            </a>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-177263490-1'></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());
 gtag('config', 'UA-177263490-1');
</script>
</body>

</html>