<?php /*get_theme_mod();
 <img src="<?php echo esc_url( get_theme_mod( 'settings_name' ) ); ?>" alt="photo">
 */

?>
<?php


get_header();
?>
    <section class="hero">
        <div class="wrap">
            <div class="hero_text-block">
                <div class="hero_text-block_social-links">
                    <ul class="hero_text-block_social-links-list">
                        <li class="hero_text-block_social-links-list_item <?php echo get_theme_mod('footer-icon-1')?>"><a href="<?php echo get_theme_mod('footer-link-1') ?>"></a></li>
                        <li class="hero_text-block_social-links-list_item <?php echo get_theme_mod('footer-icon-2')?>"><a href="<?php echo get_theme_mod('footer-link-2') ?>"></a></li>
                        <li class="hero_text-block_social-links-list_item <?php echo get_theme_mod('footer-icon-3')?>"><a href="<?php echo get_theme_mod('footer-link-3') ?>"></a></li>
                        <li class="hero_text-block_social-links-list_item <?php echo get_theme_mod('footer-icon-4')?>"><a href="<?php echo get_theme_mod('footer-link-4') ?>"></a></li>
                    </ul>
                    <div class="hero_text-block_social-links_vertical-line"></div>
                    <span class="hero_text-block_social-links_number title">02</span>
                </div>
                <div class="hero_text-block_slide">
                    <?php $args = array(
                        'post_type' => 'hero',
                        'publish' => true,
                        'paged' => get_query_var('paged')
                    );
                    query_posts($args);
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <div class="hero_text-block_slide-text">
                            <h2 class="hero_text-block_slide_title title"><?php the_title(); ?></h2>
                            <p class="hero_text-block_slide_desc"><?php echo get_the_content(); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="post_link">
                            <span class="post_link-text">VIEW PROFILE</span>
                            <div class="post_link-icon">
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    <?php endwhile;
                    endif;
                    ?>
                </div>
                <div class="hero_count-block">
                    <ol class="hero_count-block-list">
                        <li class="hero_count-block-list_item">01</li>
                        <li class="hero_count-block-list_item">02</li>
                        <li class="hero_count-block-list_item">03</li>
                        <li class="hero_count-block-list_item">04</li>
                    </ol>
                    <div class="hero_horizontal-line"></div>
                </div>

            </div>
    </section>
    <section class="portfolio">
        <div class="wrap">
            <ul class="portfolio_filters">
                <?php
                $terms = get_terms("category");
                $count = count($terms);
                if ($count > 0) {
                    foreach ($terms as $term) {
                        echo "<li class='portfolio_filters-item'><a href='#' class='portfolio_filters-item-link' data-filter='." . $term->slug . "'>" . $term->name . "</a></li>\n";
                    }
                }
                ?>
            </ul>
            <?php $args = array(
                'post_type' => 'portfolio',
                'publish' => true,
                'orderby' => 'rand',
                'paged' => get_query_var('paged'),
                'posts_per_page' => 8
            );
            query_posts($args); ?>
            <?php if (have_posts()) : ?>
                <ul class="portfolio_list">
                    <?php while (have_posts()) : the_post();
                        $termsArray = get_the_terms($post->ID, "category");
                        $termsString = "";
                        foreach ($termsArray as $term) {
                            $termsString .= $term->slug . ' ';
                        }
                        ?>
                        <li class="<?php echo $termsString; ?> item portfolio_list-item">
                            <div class="portfolio_list-item_text-block">
                                <h3 class="title portfolio_list-item_text-block_title"><?php the_title(); ?></h3>
                                <p class="portfolio_list-item_text-block_desc"><?php echo get_the_content(); ?></p>
                            </div>
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } ?>
                        </li> <!-- end item -->
                    <?php endwhile; ?>
                </ul> <!-- end isotope-list -->
            <?php endif; ?>
            <a href="" class="load-more">explore more</a>
        </div>
    </section>
    <section class="recent-posts">
        <div class="wrap">
            <h2 class="recent-posts_title title">Latest News</h2>
            <ol class="recent-posts_list">
                <?php $query = new WP_Query(array('showposts' => 3));
                if (have_posts()) : while ($query->have_posts()) :
                    $query->the_post(); ?>
                    <li class="recent-posts_list-items">
                        <figure class="recent-posts_list-items_img">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <div class="recent-posts_list-items_text-block">
                            <h4 class="recent-posts_list-items_text-block_title title"><?php the_title(); ?></h4>
                            <span class="recent-posts_list-items_text-block_date"><?php the_time("d M Y"); ?></span>
                        </div>
                    </li>
                    <?php
                    wp_reset_query();
                endwhile;
                endif; ?>
            </ol>
        </div>
    </section>


    </main>

<?php

get_footer();



