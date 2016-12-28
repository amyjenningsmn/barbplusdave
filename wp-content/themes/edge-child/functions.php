<?php


function create_custom_post_types() {
    register_post_type( 'listings',
    // ^^ unique name
        array(
    //   ^^ defines settings for new post type
            'labels' => array(
                'name' => __( 'Listings' ),
            //   ^^  human readable name ^^ in left nav wp admin dash
                'singular_name' => __( 'Individual Listing' )
            //   ^^ human readable name for a single listing post
            ),
            'public' => true,
            'has_archive' => true,
            // ^^ because we want it to have an archive
            'rewrite' => array( 'slug' => 'listings' ),
            // ^^ name used in the URLs for listings posts. They will look something like this: http://localhost:8888/barbplusdave/listings/something-something/
        )
    );
}
add_action( 'init', 'create_custom_post_types' );
// ^^ tells WP to add the function create_custom_post_types() to its init() function, which is one of the functions WP runs every time site is loaded
// note: sometimes this doesn't work, and to fix it, The easiest way to fix this is to have WordPress reset the permalinks. So, I will go to the Settings menu and click on Permalinks.
// I will then change the permalinks setting from Day and Name to Month and Name, although it really doesn’t matter which one I choose.
// I will then hit Save Changes, and then I will go back to my test case study and hit refresh. And, sure enough, there it is.

?>
