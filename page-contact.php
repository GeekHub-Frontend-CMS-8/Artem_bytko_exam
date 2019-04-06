<?php /* Template Name: "contact" */
get_header(); ?>
    <section class="contact">
        <div class="contact_location-block">
            <div class="black-block"></div>
                <h2 class="contact_location-block_title title"><?php the_title(); ?></h2>
                <p class="contact_location-block_desc"><?php echo get_theme_mod('contact-text-setting') ?></p>
                <a href="#" class="post_link contact_post_link">
                    <span class="post_link-text">get directions</span>
                    <div class="post_link-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                </a>

        </div>
        <div class="contact_info">
            <div class="contact_info_text-block">
                <?php
                while (have_posts()) :
                    the_post(); ?>
                    <div class="contact_info_text-block_desc"><?php the_content(); ?>
                    </div>
                <?php endwhile;
                ?>
            </div>
            <div class="contact_info_about-us">
                <div class="contact_info_about-us_text-block">
                    <i class="fas fa-home"></i>
                    <div class="contact_info_about-us_text-block_text">
                        <a href="#"
                           class="contact_info_about-us_text-block_text_link"><?php echo get_theme_mod('location-street', true) ?></a>
                        <a href="#"
                           class="contact_info_about-us_text-block_text_link"><?php echo get_theme_mod('location-city', true) ?>
                            <a href="#"
                               class="contact_info_about-us_text-block_text_link"><?php echo get_theme_mod('location-text', true) ?></a>
                    </div>
                </div>
                <div class="contact_info_about-us_text-block">
                    <i class="fas fa-phone-square"></i>
                    <div class="contact_info_about-us_text-block_text">
                        <a href="tel:<?php echo get_theme_mod('phone-1', true) ?>"
                           class="contact_info_about-us_text-block_text_link"><?php echo get_theme_mod('phone-1', true) ?></a>
                        <a href="tel:<?php echo get_theme_mod('phone-2', true) ?>"
                           class="contact_info_about-us_text-block_text_link"><?php echo get_theme_mod('phone-2', true) ?></a>
                    </div>
                </div>
                <div class="contact_info_about-us_text-block">
                    <i class="fas fa-envelope"></i>
                    <div class="contact_info_about-us_text-block_text">
                        <a href="mailto:<?php echo get_theme_mod('email-contact-settings', true) ?>"
                           class="contact_info_about-us_text-block_text_link"><?php echo get_theme_mod('email-contact-settings', true) ?></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php
get_footer();