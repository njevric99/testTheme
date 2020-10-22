<?php
function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'child-style', 
					get_stylesheet_directory_uri() . '/dist/css/child-style.css', 
					array( 'parent-style' ),
					wp_get_theme()->get('Version')
);
	
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles');
/*
	==========================================
	 Sidebar function
	==========================================
*/
function jobbrs_theme_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Right',
			'id'	=> 'rightsidebar',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','jobbrs_theme_setup');


/*
	==========================================
	 Theme support function
	==========================================
*/

add_theme_support('post-thumbnails');
add_image_size( 'blog-thumb', 236, 237, true);


/*
	==========================================
	 Theme Menus
	==========================================
*/
function jobbrs_widget_setup() {
	
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	
}

add_action('init', 'jobbrs_widget_setup');

/*
	==========================================
	 Custom Post Type
	==========================================
*/
function jobbrs_custom_post_type (){
	
	$labels = array(
		'name' => 'News',
		'singular_name' => 'News',
		'add_new' => 'Add News',
		'all_items' => 'All News',
		'add_new_item' => 'Add News',
		'edit_item' => 'Edit News',
		'new_item' => 'New News',
		'view_item' => 'View News',
		'search_item' => 'Search News',
		'not_found' => 'No News found',
		'not_found_in_trash' => 'No News found in trash',
		'parent_item_colon' => 'Parent News'
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
			'author',
			'revisions',
		),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('News',$args);
}
add_action('init','jobbrs_custom_post_type');

?>





