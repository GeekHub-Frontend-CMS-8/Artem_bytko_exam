<?php
/**
 * myexamtheme Theme Customizer
 *
 * @package myexamtheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function myexamtheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'myexamtheme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'myexamtheme_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'myexamtheme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function myexamtheme_customize_partial_blogname() {
	bloginfo( 'name' );
}

function exam_customize_register($wp_customize){
    /*------------------------------------------------------------------
* hero
* -------------------------------------------------------------------*/

    $wp_customize->add_section('hero', array(
        'title' => __('hero', 'myexamtheme'),
        'priority' => 80,
    ));

    $wp_customize->add_setting(
        'hero-setting-title',
        array(
            'default'            => 'Georgina Alson',
            'sanitize_callback'  => 'true_sanitize_copyright',
            'transport'          => 'refresh'
        )
    );

    $wp_customize->add_control(
        'hero-setting-title',
        array(
            'section'  => 'hero',
            'label'    => 'title',
            'type'     => 'text'
        )
    );

    $wp_customize->add_setting(
        'hero-setting-desc',
        array(
            'default'            => 'young model 2020',
            'sanitize_callback'  => 'true_sanitize_copyright',
            'transport'          => 'refresh'
        )
    );

    $wp_customize->add_control(
        'hero-setting-desc',
        array(
            'section'  => 'hero',
            'label'    => 'desc',
            'type'     => 'text'
        )
    );


    /*---------------------------------------------------------------------
     * footer - social-links settings and text
     * -------------------------------------------------------------------*/
    $wp_customize->add_section('footer-text', array(
        'title' => __('footer-text', 'homework'),
        'priority' => 30,
    ));

    $wp_customize->add_setting(
        'footer_text',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );
    $wp_customize->add_control(
        'footer_text', // id
        array(
            'section'  => 'footer-text', // id секции
            'label'    => 'footer-text',
            'type'     => 'text' // текстовое поле
        )
    );

    $wp_customize->add_setting(
        'footer_email',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );
    $wp_customize->add_control(
        'footer_email', // id
        array(
            'section'  => 'footer-text', // id секции
            'label'    => 'footer_email',
            'type'     => 'text' // текстовое поле
        )
    );

    $wp_customize->add_section('footer-links', array(
        'title' => __('footer-links', 'homework'),
        'priority' => 30,
    ));

    $wp_customize->add_setting(
        'footer-icon-1',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );
    $wp_customize->add_control(
        'footer-icon-1', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'icon1',
            'type'     => 'text' // текстовое поле
        )
    );
    $wp_customize->add_setting(
        'footer-link-1',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );

    $wp_customize->add_control(
        'footer-link-1', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'link1',
            'type'     => 'text' // текстовое поле
        )
    );

    $wp_customize->add_setting(
        'footer-icon-2',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );
    $wp_customize->add_control(
        'footer-icon-2', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'icon2',
            'type'     => 'text' // текстовое поле
        )
    );
    $wp_customize->add_setting(
        'footer-link-2',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );

    $wp_customize->add_control(
        'footer-link-2', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'link2',
            'type'     => 'text' // текстовое поле
        )
    );

    $wp_customize->add_setting(
        'footer-icon-3',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );
    $wp_customize->add_control(
        'footer-icon-3', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'icon3',
            'type'     => 'text' // текстовое поле
        )
    );
    $wp_customize->add_setting(
        'footer-link-3',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );

    $wp_customize->add_control(
        'footer-link-3', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'link3',
            'type'     => 'text' // текстовое поле
        )
    );

    $wp_customize->add_setting(
        'footer-icon-4',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );
    $wp_customize->add_control(
        'footer-icon-4', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'icon4',
            'type'     => 'text' // текстовое поле
        )
    );
    $wp_customize->add_setting(
        'footer-link-4',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );

    $wp_customize->add_control(
        'footer-link-4', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'link4',
            'type'     => 'text' // текстовое поле
        )
    );


    $wp_customize->add_setting(
        'footer-desc',
        array(
            'default'            => '', // текст по умолчанию
            'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
        )
    );
    $wp_customize->add_control(
        'footer-desc', // id
        array(
            'section'  => 'footer-links', // id секции
            'label'    => 'footer-desc',
            'type'     => 'text' // текстовое поле
        )
    );


    $wp_customize->add_section('contact-text', array(
        'title' => __('contact-text', 'myexamtheme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting(
        'contact-text-setting',
        array(
            'default'            => '',
            'sanitize_callback'  => 'true_sanitize_copyright',
        )
    );

    $wp_customize->add_control(
        'contact-text-setting',
        array(
            'section'  => 'contact-text',
            'label'    => 'contact-text',
            'type'     => 'text'
        )
    );
//---------------------------------------------------
//contact info
//--------------------------------------------------

    $wp_customize->add_section('location', array(
        'title' => __('location', 'myexamtheme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting(
        'location-street',
        array(
            'default'            => '79 - 81 Berkeley Square',
            'sanitize_callback'  => 'true_sanitize_copyright',
        )
    );

    $wp_customize->add_control(
        'location-street',
        array(
            'section'  => 'location',
            'label'    => 'location-street',
            'type'     => 'text'
        )
    );
    $wp_customize->add_setting(
        'location-city',
        array(
            'default'            => 'London',
            'sanitize_callback'  => 'true_sanitize_copyright',
        )
    );

    $wp_customize->add_control(
        'location-city',
        array(
            'section'  => 'location',
            'label'    => 'location-city',
            'type'     => 'text'
        )
    );
    $wp_customize->add_setting(
        'location-text',
        array(
            'default'            => 'WC923 9TT',
            'sanitize_callback'  => 'true_sanitize_copyright',
        )
    );

    $wp_customize->add_control(
        'location-text',
        array(
            'section'  => 'location',
            'label'    => 'location-text',
            'type'     => 'text'
        )
    );


    $wp_customize->add_section('phone', array(
        'title' => __('phone', 'myexamtheme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting(
        'phone-1',
        array(
            'default'            => '+44 (0) 234 567 8910',
            'sanitize_callback'  => 'true_sanitize_copyright',
        )
    );

    $wp_customize->add_control(
        'phone-1',
        array(
            'section'  => 'phone',
            'label'    => 'phone-1',
            'type'     => 'text'
        )
    );
    $wp_customize->add_setting(
        'phone-2',
        array(
            'default'            => '+44 (0) 234 567 8910',
            'sanitize_callback'  => 'true_sanitize_copyright',
        )
    );

    $wp_customize->add_control(
        'phone-2',
        array(
            'section'  => 'phone',
            'label'    => 'phone-2',
            'type'     => 'text'
        )
    );

    $wp_customize->add_section('email-contact', array(
        'title' => __('email-contact', 'myexamtheme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting(
        'email-contact-settings',
        array(
            'default'            => 'hello@mitalent.com',
            'sanitize_callback'  => 'true_sanitize_copyright',
        )
    );

    $wp_customize->add_control(
        'email-contact-settings',
        array(
            'section'  => 'email-contact',
            'label'    => 'email-contact',
            'type'     => 'text'
        )
    );

}


add_action('customize_register', 'exam_customize_register');


function img_customizer( $wp_customize ) {

    // Add Settings
    $wp_customize->add_setting('settings', array(
        'default'      => '',
        'transport'         => 'refresh',
    ));
    // Add Section
    $wp_customize->add_section('section', array(
        'title'             => __('hero_background', 'myexamtheme'),
        'priority'          => 70,
    ));

    // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'control', array(
        'label'             => __('control', 'myexamtheme'),
        'section'           => 'section',
        'settings'          => 'settings',
    )));

    // Add Settings
    $wp_customize->add_setting('hero-setting', array(
        'default'      => '',
        'transport'         => 'refresh',
    ));
    // Add Section
    $wp_customize->add_section('hero-section', array(
        'title'             => __('hero_img', 'myexamtheme'),
        'priority'          => 80,
    ));

    // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero-control', array(
        'label'             => __('hero-control', 'myexamtheme'),
        'section'           => 'hero-section',
        'settings'          => 'hero-setting',
    )));

    // Add Settings
    $wp_customize->add_setting('footer-setting', array(
        'default'      => '',
        'transport'         => 'refresh',
    ));
    // Add Section
    $wp_customize->add_section('footer-section', array(
        'title'             => __('footer_logo', 'myexamtheme'),
        'priority'          => 80,
    ));

    // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-control', array(
        'label'             => __('footer-control', 'myexamtheme'),
        'section'           => 'footer-section',
        'settings'          => 'footer-setting',
    )));

    // Add Settings
    $wp_customize->add_setting('contact-setting', array(
        'default'      => '',
        'transport'         => 'refresh',
    ));
    // Add Section
    $wp_customize->add_section('contact-section', array(
        'title'             => __('contact img', 'myexamtheme'),
        'priority'          => 80,
    ));

    // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer-control', array(
        'label'             => __('contact-control', 'myexamtheme'),
        'section'           => 'contact-section',
        'settings'          => 'contact-setting',
    )));

}
add_action('customize_register', 'img_customizer');



function true_customizer_css() {
?>
     <style type="text/css">
        .hero {
            background-image: url('<?php echo get_theme_mod( 'settings' );?>');
        }

        .hero_text-block_slide {
            background-image: url('<?php echo get_theme_mod( 'hero-setting' );?>');
        }

         .contact_location-block{
             background-image: url('<?php echo get_theme_mod( 'contact-setting' );?>');
         }

    </style>
   <?php
}

add_action( 'wp_head', 'true_customizer_css' );
function true_sanitize_copyright( $value ) {
    return strip_tags( stripslashes( $value ) ); // обрезаем слеши и HTML-теги
}

function myexamtheme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function myexamtheme_customize_preview_js() {
	wp_enqueue_script( 'myexamtheme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'myexamtheme_customize_preview_js' );
