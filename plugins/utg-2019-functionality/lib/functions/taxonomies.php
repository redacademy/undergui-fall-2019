<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy

// Register Taxonomy Program Taxonomy
function create_programtaxonomy_tax() {

	$labels = array(
		'name'              => _x( 'Program Taxonomies', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Program Taxonomy', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Program Taxonomies', 'textdomain' ),
		'all_items'         => __( 'All Program Taxonomies', 'textdomain' ),
		'parent_item'       => __( 'Parent Program Taxonomy', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Program Taxonomy:', 'textdomain' ),
		'edit_item'         => __( 'Edit Program Taxonomy', 'textdomain' ),
		'update_item'       => __( 'Update Program Taxonomy', 'textdomain' ),
		'add_new_item'      => __( 'Add New Program Taxonomy', 'textdomain' ),
		'new_item_name'     => __( 'New Program Taxonomy Name', 'textdomain' ),
		'menu_name'         => __( 'Program Taxonomy', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'programtaxonomy', array('post_programs'), $args );

}
add_action( 'init', 'create_programtaxonomy_tax' );

// Register Custom Taxonomy Level for classes
function custom_levels_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Levels', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Level', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Level Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'level', array( 'post_classes' ), $args );

}
add_action( 'init', 'custom_levels_taxonomy', 0 );

// Register Custom Taxonomy age for classes
function custom_age_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Ages', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Age', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Age Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'age', array( 'post_classes' ), $args );

}
add_action( 'init', 'custom_age_taxonomy', 0 );