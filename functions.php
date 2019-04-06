<?php
/**
 * myexamtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myexamtheme
 */

if ( ! function_exists( 'myexamtheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function myexamtheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on myexamtheme, use a find and replace
		 * to change 'myexamtheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'myexamtheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'header-menu' => esc_html__( 'Primary', 'charity_project_go_cpd' ),
        ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'myexamtheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 400,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

//add_filter('show_admin_bar', '__return_false');

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
    global $post;
    return '<a href="'. get_permalink($post) . '" class="my_class" > Read more...</a>';
}

add_action( 'after_setup_theme', 'myexamtheme_setup' );

add_action('init', 'create_hero');
function create_hero(){
    register_post_type('hero', array(
        'labels'             => array(
            'name'               => 'hero',
            'singular_name'      => 'hero',
            'add_new'            => 'Добавить',
            'add_new_item'       => 'Добавить новую запись',
            'edit_item'          => 'Редактировать',
            'new_item'           => 'Новая',
            'view_item'          => 'Посмотреть',
            'search_items'       => 'Найти',
            'not_found'          =>  'Не найдено',
            'not_found_in_trash' => 'В корзине не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'hero'

        ),
        'public'             => true,
        'show_ui'            => true,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail')
    ) );
}

add_action('init', 'create_portfolio');
function create_portfolio(){
    register_post_type('portfolio', array(
        'labels'             => array(
            'name'               => 'portfolio',
            'singular_name'      => 'portfolio',
            'add_new'            => 'Добавить',
            'add_new_item'       => 'Добавить новую запись',
            'edit_item'          => 'Редактировать',
            'new_item'           => 'Новая',
            'view_item'          => 'Посмотреть',
            'search_items'       => 'Найти',
            'not_found'          =>  'Не найдено',
            'not_found_in_trash' => 'В корзине не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'portfolio'

        ),
        'public'             => true,
        'show_ui'            => true,
        'menu_position'      => null,
        'taxonomies'          => array('topics', 'category' ),
        'supports'           => array('title', 'editor', 'thumbnail')
    ) );
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function myexamtheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'myexamtheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'myexamtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


        register_sidebar( array(
            'name'          => 'search',
            'id'            => 'search',
            'before_widget'         => '<div class="search-wrap">',
            'after_widget'         => '</div>'
        ) );

}
add_action( 'widgets_init', 'myexamtheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function myexamtheme_scripts() {
	wp_enqueue_style( 'myexamtheme-style', get_stylesheet_uri(), array(), filemtime( get_theme_file_path('style.css')) );
    wp_enqueue_style( 'myexamtheme-css', get_template_directory_uri() . '/css/main.min.css', array(), filemtime( get_theme_file_path('/css/main.min.css')));
    wp_enqueue_style( 'style-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css', array(), filemtime( get_theme_file_path('/layouts/content-sidebar.css')) );
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . "/js/framework/slick/slick.css");
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . "/js/framework/slick/slick-theme.css");
    wp_enqueue_style( 'font-css', "https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Poppins");
    wp_enqueue_style( 'icon-css', "https://use.fontawesome.com/releases/v5.7.2/css/all.css");


    wp_register_script('jquery-mirage', "//code.jquery.com/jquery-migrate-1.2.1.min.js");
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/js/framework/isotope.min.js', array ('jquery'), filemtime( get_theme_file_path('/js/framework/isotope.min.js')), false);
    wp_register_script('slick-js', get_template_directory_uri() . '/js/framework/slick/slick.min.js', array ('jquery'), null, false);

    wp_enqueue_script( 'myexamtheme-js', get_template_directory_uri() . '/js/vendor/vendor.min.js', array('jquery'),  filemtime( get_theme_file_path('/js/vendor/vendor.min.js')), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'myexamtheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



