<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myexamtheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

    <?php $cats = wp_list_categories(array(
            'echo' => 0,
            'show_count' => 1,
            'title_li' => '<h3>#######</h3>',
    ));
    $cats = str_replace( ['(',')'], '', $cats);
    echo $cats;
    ?>
</aside><!-- #secondary -->
