<?php

/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package utg_Theme
 */

<<<<<<< HEAD
if (!function_exists('red_starter_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function red_starter_setup()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let WordPress manage the document title.
		add_theme_support('title-tag');

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => esc_html('Primary Menu'),
		));

		// Switch search form, comment form, and comments to output valid HTML5.
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
	}
endif; // red_starter_setup
add_action('after_setup_theme', 'red_starter_setup');
=======
if ( ! function_exists( 'utg_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function utg_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // utg_setup
add_action( 'after_setup_theme', 'utg_setup' );
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
<<<<<<< HEAD
function red_starter_content_width()
{
	$GLOBALS['content_width'] = apply_filters('red_starter_content_width', 640);
}
add_action('after_setup_theme', 'red_starter_content_width', 0);
=======
function utg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'utg_content_width', 640 );
}
add_action( 'after_setup_theme', 'utg_content_width', 0 );
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
<<<<<<< HEAD
function red_starter_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html('Sidebar'),
=======
function utg_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
<<<<<<< HEAD
add_action('widgets_init', 'red_starter_widgets_init');
=======
add_action( 'widgets_init', 'utg_widgets_init' );
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
<<<<<<< HEAD
function red_starter_minified_css($stylesheet_uri, $stylesheet_dir_uri)
{
	if (file_exists(get_template_directory() . '/build/css/style.min.css')) {
=======
function utg_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
<<<<<<< HEAD
add_filter('stylesheet_uri', 'red_starter_minified_css', 10, 2);
=======
add_filter( 'stylesheet_uri', 'utg_minified_css', 10, 2 );
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2

/**
 * Enqueue scripts and styles.
 */
<<<<<<< HEAD
function red_starter_scripts()
{
	wp_enqueue_style('red-starter-style', get_stylesheet_uri());

	//Font Awesome
	wp_enqueue_script('utg-2019-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');

=======
function utg_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2

	wp_enqueue_script('red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true);
	wp_enqueue_script('red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
<<<<<<< HEAD
add_action('wp_enqueue_scripts', 'red_starter_scripts');
=======
add_action( 'wp_enqueue_scripts', 'utg_scripts' );
>>>>>>> 74a619e14e455dcc75504a1fb511abe7d24dfdb2

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
