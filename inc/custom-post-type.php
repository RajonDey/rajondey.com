<?php

/*
	
@package rdcirclestheme
	
========================
THEME CUSTOM POST TYPES
========================
*/

$contact = get_option( 'activate_contact' );
if( @$contact == 1 ){
	
	add_action( 'init', 'rdcircles_contact_custom_post_type' );
	
	add_filter( 'manage_rdcircles-contact_posts_columns', 'rdcircles_set_contact_columns' );
	add_action( 'manage_rdcircles-contact_posts_custom_column', 'rdcircles_contact_custom_column', 10, 2 );
	
	add_action( 'add_meta_boxes', 'rdcircles_contact_add_meta_box' );
	add_action( 'save_post', 'rdcircles_save_contact_email_data' );
	
}


/*
RD Circles Learning Post-type Function
=======================================
*/
function rdcircles_learning_post_type() {
	$labels = array(
		'name' => 'Learning',
		'singular_name' => 'Learning',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Learning',
		'not_found' => 'No items Found',
		'not_found_in_trash' => 'No item found in trash',
		'parent_item_colon' => 'Parent Item',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields'
		),
		'taxonomies' => array('category','post_tag'),
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-awards'
	);
	register_post_type('learning',$args);
}
add_action('init','rdcircles_learning_post_type');


/*
RD Circles Books Post-type Function
=======================================
*/
function rdcircles_books_post_type() {
	$labels = array(
		'name' => 'Books',
		'singular_name' => 'Books',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Books',
		'not_found' => 'No items Found',
		'not_found_in_trash' => 'No item found in trash',
		'parent_item_colon' => 'Parent Item',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 7,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields'
		),
		'taxonomies' => array('category','post_tag'),
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-book-alt'
	);
	register_post_type('books',$args);
}
add_action('init','rdcircles_books_post_type');


/*
RD Circles Courses Post-type Function
=======================================
*/
function rdcircles_courses_post_type() {
	$labels = array(
		'name' => 'Courses',
		'singular_name' => 'Courses',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Courses',
		'not_found' => 'No items Found',
		'not_found_in_trash' => 'No item found in trash',
		'parent_item_colon' => 'Parent Item',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'tags',
			'custom-fields'
		),
		'taxonomies' => array('category','post_tag'),
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-edit-page'
	);
	register_post_type('courses',$args);
}
add_action('init','rdcircles_courses_post_type');


/*
	=======================================
	RD Circles Portfolios Post-type Function
	=======================================
*/
function rdcircles_portfolio_post_type() {
	$labels = array(
		'name' => 'Portfolios',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items Found',
		'not_found_in_trash' => 'No item found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields',
		),
		'taxonomies' => array('category','post_tag'),
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-nametag'
	);
	register_post_type('portfolios',$args);
}
add_action('init','rdcircles_portfolio_post_type');















