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