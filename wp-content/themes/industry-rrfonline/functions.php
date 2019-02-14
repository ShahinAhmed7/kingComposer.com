<?php
/**
 * Industry RRFOnline functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Industry_RRFOnline
 */

if ( ! function_exists( 'industry_rrfonline_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function industry_rrfonline_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Industry RRFOnline, use a find and replace
		 * to change 'industry-rrfonline' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'industry-rrfonline', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'industry-rrfonline' ),
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


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'industry_rrfonline_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function industry_rrfonline_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'industry_rrfonline_content_width', 640 );
}
add_action( 'after_setup_theme', 'industry_rrfonline_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function industry_rrfonline_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'industry-rrfonline' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'industry-rrfonline' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets', 'industry-rrfonline' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add footer widgets here.', 'industry-rrfonline' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'industry_rrfonline_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function industry_rrfonline_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.3', 'all'  );
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.1.3', 'all'  );
	wp_enqueue_style( 'material-css', get_template_directory_uri() . '/assets/css/material-design-iconic-font.min.css', array(), '4.1.3', 'all'  );
	wp_enqueue_style( 'default-css', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0', 'all'  );
	wp_enqueue_style( 'industry-rrfonline-style', get_stylesheet_uri() );



	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.2.1', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'industry_rrfonline_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


