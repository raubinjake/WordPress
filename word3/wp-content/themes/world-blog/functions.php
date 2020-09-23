<?php
/**
 * world blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package world-blog
 */

if ( ! function_exists( 'world_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function world_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on world-blog, use a find and replace
	 * to change 'world-blog' to the name of your theme in all the template files.
	 */
	 load_theme_textdomain( 'world-blog', get_template_directory() . '/languages' );

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
     */
    add_theme_support( 'post-thumbnails' );


    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'world-blog' ),

    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'world_blog_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
	) );

}
endif; // world_blog_setup

add_action( 'after_setup_theme', 'world_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function world_blog_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'world_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'world_blog_content_width', 0 );


if ( ! function_exists( 'world_blog_widgets_init' ) ) :

function world_blog_widgets_init() {

    /*
     * Register widget areas.
     */
  
    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'world-blog' ),
        'id' => 'right_sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'world-blog' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );
	
    register_sidebar( array(
        'name' => __( 'Footer Widget 1', 'world-blog' ),
        'id' => 'footer_widget_1',
		'description'   => esc_html__( 'Add widgets here.', 'world-blog' ),
        'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'world-blog' ),
        'id' => 'footer_widget_2',
		'description'   => esc_html__( 'Add widgets here.', 'world-blog' ),
        'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 3', 'world-blog' ),
        'id' => 'footer_widget_3',
		'description'   => esc_html__( 'Add widgets here.', 'world-blog' ),
        'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

   
}
add_action( 'widgets_init', 'world_blog_widgets_init' );
endif;// world_blog_widgets_init



if ( ! function_exists( 'world_blog_customize_register' ) ) :

function world_blog_customize_register( $wp_customize ) {
   

    /* Social Layout */

    $wp_customize->add_section( 'url_section', array(
	    'priority'       => 2,
        'title' => __( 'Social Layout', 'world-blog' )
    ));

    $wp_customize->add_setting( 'url_section_facebook_url', array(
        'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'url_section_facebook_url', array(
        'label' => __( 'Facebook Url', 'world-blog' ),
        'type' => 'url',
        'section' => 'url_section'
    ));
	
	$wp_customize->add_setting( 'url_section_instagram_url', array(
        'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'url_section_instagram_url', array(
        'label' => __( 'instagram Url', 'world-blog' ),
        'type' => 'url',
        'section' => 'url_section'
    ));
	
	$wp_customize->add_setting( 'url_section_twitter_url', array(
        'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'url_section_twitter_url', array(
        'label' => __( 'Twitter Url', 'world-blog' ),
        'type' => 'url',
        'section' => 'url_section'
    ));
	
	$wp_customize->add_setting( 'url_section_linkedin_url', array(
        'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'url_section_linkedin_url', array(
        'label' => __( 'linkedin Url', 'world-blog' ),
        'type' => 'url',
        'section' => 'url_section'
    ));
	
	$wp_customize->add_setting( 'url_section_vimeo_url', array(
        'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'url_section_vimeo_url', array(
        'label' => __( 'Vimeo Url', 'world-blog' ),
        'type' => 'url',
        'section' => 'url_section'
    ));
	
	$wp_customize->add_setting( 'url_section_youtube_url', array(
        'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'url_section_youtube_url', array(
        'label' => __( 'Youtube Url', 'world-blog' ),
        'type' => 'url',
        'section' => 'url_section'
    ));
	
	$wp_customize->add_setting( 'url_section_google_url', array(
        'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'url_section_google_url', array(
        'label' => __( 'Google Url', 'world-blog' ),
        'type' => 'url',
        'section' => 'url_section'
    ));
	

    /* Copyright */

    $wp_customize->add_section( 'copyright_section', array(
        'priority'       => 250,
        'title' => __( 'Copyright', 'world-blog' )
    ));

    $wp_customize->add_setting( 'copyright_section_text', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_textarea'
    ));

    $wp_customize->add_control( 'copyright_section_text', array(
        'label' => __( 'Copyright', 'world-blog' ),
        'type' => 'textarea',
        'section' => 'copyright_section'
    ));




}
add_action( 'customize_register', 'world_blog_customize_register' );
endif;// world-blog_customize_register



if ( ! function_exists( 'world_blog_enqueue_scripts' ) ) :
    function world_blog_enqueue_scripts() {
		

     /* Js */
	 
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'world_blog-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'world_blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );


      /* Css */
	  
	wp_enqueue_style( 'world-blog-style', get_stylesheet_uri() );
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/css/themify-icons/themify-icons.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
    }
    add_action( 'wp_enqueue_scripts', 'world_blog_enqueue_scripts' );
endif;


/**
 * Breadcrumb trail.
 */
require get_template_directory() . '/inc/breadcrumb-trail-master/breadcrumb-trail.php';

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

/*
 * Resource files included by Bootstrap.
 */
require get_template_directory() . '/inc/bootstrap/class-wp-bootstrap-navwalker.php'; 