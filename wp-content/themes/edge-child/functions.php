<?php

/**************** Edge-Child functions.php download from theme ***************************/
add_action( 'wp_enqueue_scripts', 'edge_enqueue_styles' );
function edge_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
/******************** End Edge-Child functions.php downloaded content ********/


/**************** Add test.js file and create dependency ***************************/
// function edge_child_enqueue_scripts() {
// wp_enqueue_script( 'test', get_stylesheet_directory_uri() . '/js/test.js', array('jquery'), '1.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'edge_child_enqueue_scripts' );


/************ Add custom fonts - overwrite - from edge-functions.php ********************/
function edge_child_scripts() {
$edge_googlefont = array();
array_push( $edge_googlefont, 'Lato:400,300,700,400italic');
array_push( $edge_googlefont, 'Raleway');
$edge_googlefonts = implode("|", $edge_googlefont);
wp_register_style( 'edge_google_fonts', '//fonts.googleapis.com/css?family='.$edge_googlefonts);
wp_enqueue_style( 'edge_google_fonts' );
}
add_action( 'wp_enqueue_scripts', 'edge_child_scripts' );


/********************* Create Custom Post Types ***********************************/
function create_custom_post_types() {
    register_post_type( 'listings',
        array(
            'labels' => array(
                'name' => __( 'Listings' ),
                'singular_name' => __( 'Listing' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'listings' ),
        )
    );

    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Blog' ),
                'singular_name' => __( 'Blog Post' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'blog' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );


/********************* Filter Excerpt Length to 20 Words ***********************************/
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>
