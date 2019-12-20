<?php

/**
 * UTG functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package utg_Theme
 */

if (!function_exists('utg_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function utg_setup()
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
			'primary-mobile' => esc_html('Primary Mobile Menu'),
			'footer-menu-1' => esc_html('Footer Menu 1'),
			'footer-menu-2' => esc_html('Footer Menu 2'),
			'footer-menu-3' => esc_html('Footer Menu 3'),
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
endif; // utg_setup
add_action('after_setup_theme', 'utg_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function utg_content_width()
{
	$GLOBALS['content_width'] = apply_filters('utg_content_width', 640);
}
add_action('after_setup_theme', 'utg_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function utg_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html('Sidebar'),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Footer Address',
		'id' => 'footer-address',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<p class="widget-title">',
		'after_title' => '</p>',
	));
}
add_action('widgets_init', 'utg_widgets_init');

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function utg_minified_css($stylesheet_uri, $stylesheet_dir_uri)
{
	if (file_exists(get_template_directory() . '/build/css/style.min.css')) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter('stylesheet_uri', 'utg_minified_css', 10, 2);

/**
 * Enqueue scripts and styles.
 */
function utg_scripts()
{
	// CSS styles
	wp_enqueue_style('utg-style', get_stylesheet_uri());

	//Font Awesome
	wp_enqueue_style('utg-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');
	//Flickity styles
	wp_enqueue_style('utg-flickity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
	//Google Titillium Web font
	wp_enqueue_style('utg-titillium-web-font', 'https://fonts.googleapis.com/css?family=Titillium+Web:200,400,700&display=swap');


	//Underscores a11y and navigation scripts
	wp_enqueue_script('utg-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true);
	wp_enqueue_script('utg-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true);
	//Mobile menu control
	wp_enqueue_script('utg-mobile-menu', get_template_directory_uri() . '/build/js/mobile-menu.min.js', array(), '', true);
	// Grab post ID and pull into Registration page
	wp_enqueue_script('utg-find-classes-registration', get_template_directory_uri() . '/build/js/find-classes-registration.min.js', array('jquery'), '', true);
	//FAQ container toggles
	wp_enqueue_script('utg-faq-toggle', get_template_directory_uri() . '/build/js/faq-toggle.min.js', array(), '', true);
	//Tabbed content scripts
	wp_enqueue_script('utg-tabbed-content', get_template_directory_uri() . '/build/js/tabbed-content.min.js', array(), '', true);
	//Flickity CDN scripts
	wp_enqueue_script('utg-flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '', true);
	//Enroll Page scripts
	// wp_enqueue_script('utg-enroll-js', get_template_directory_uri() . '/build/js/enroll-page.min.js', array(), '', true);

	//Ajax methods


	//Posts category ajax funtionality  
	wp_enqueue_script('utg-ajax-post-category-filter', get_template_directory_uri() . '/build/js/ajax-post-category-filter.min.js', array('jquery'), '', true);
	// Filters post_classes by different taxonomies
	wp_enqueue_script('utg-ajax-find-classes-filter', get_template_directory_uri() . '/build/js/ajax-find-classes-filter.min.js', array('jquery'), '', true);
	// Filters locations by different taxonomies
	wp_enqueue_script('utg-ajax-find-locations-filter', get_template_directory_uri() . '/build/js/ajax-find-locations-filter.min.js', array('jquery'), '', true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	$PostCount = wp_count_posts($type = 'post', $perm = 'readable');
	$publishedPostCount = $PostCount->publish;

	//localized script to access DB with JS
	$localized_scripts = array(
		'rest_url' 		 => esc_url_raw(rest_url()),
		'home_url' 		 => home_url(),
		'site_url'		 => site_url(),
		'stylesheet_url' => get_template_directory_uri(),
		'max_num'  		 =>  $publishedPostCount,

	);

	wp_localize_script('utg-ajax-post-category-filter', 'utg_vars', $localized_scripts);
	wp_localize_script('utg-ajax-find-classes-filter', 'utg_vars', $localized_scripts);
	wp_localize_script('utg-ajax-find-locations-filter', 'utg_vars', $localized_scripts);
}
add_action('wp_enqueue_scripts', 'utg_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/*
	*	use to shorten big titles to fix titles breaking site cards
	*	takes two parameters, what follows the shortened title and an integer 
	*	that counts the amount of words in the new title
	*/
