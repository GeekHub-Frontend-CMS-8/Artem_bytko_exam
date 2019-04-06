<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myexamtheme
 */

?>


<footer id="colophon" class="site-footer">
    <div class="wrap">
        <div class="footer-mail">
            <figure class="footer-mail_logo">
                <img src="<?php echo esc_url(get_theme_mod('footer-setting')); ?>" alt="logo">
            </figure>
            <div class="footer-mail_link-wrap">
                <a href="mailto:hello@mitalent.com" class="footer-mail_link-wrap_link"><?php echo get_theme_mod('footer_email') ?></a>
                <i class="fas fa-envelope footer-mail_link-wrap_icon"></i>
            </div>
        </div>
        <hr>
        <div class="footer-links">
            <p class="footer-links_desc"><?php echo get_theme_mod('footer_text') ?></p>
            <ul class="hero_text-block_social-links-list  footer-links-list">
                <li class="hero_text-block_social-links-list_item  footer-links-list_item <?php echo get_theme_mod('footer-icon-1') ?>"><a
                            href="<?php echo get_theme_mod('footer-link-1') ?>"></a></li>
                <li class="hero_text-block_social-links-list_item footer-links-list_item <?php echo get_theme_mod('footer-icon-2') ?>"><a
                            href="<?php echo get_theme_mod('footer-link-2') ?>"></a></li>
                <li class="hero_text-block_social-links-list_item footer-links-list_item <?php echo get_theme_mod('footer-icon-3') ?>"><a
                            href="<?php echo get_theme_mod('footer-link-3') ?>"></a></li>
                <li class="hero_text-block_social-links-list_item footer-links-list_item <?php echo get_theme_mod('footer-icon-4') ?>"><a
                            href="<?php echo get_theme_mod('footer-link-4') ?>"></a></li>
            </ul>
        </div>
    </div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
