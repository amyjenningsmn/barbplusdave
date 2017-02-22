<?php
/**
 * The template for archived Blog posts
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */


// This is the default page Listings and Blog is using.

get_header(); ?>

<div class="container clearfix">
 <div class="one-column clearfix">
	<main id="blog">
	 <div class="main-heading">
    <img class="dog" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truckDog.png" />
    <h1>What Are We Up to Now?</h1>
    </div>
					<?php
					if( have_posts() ) {
						while( have_posts() ) {
							the_post();
							$main_post_image = get_field('main_post_image'); ?>
							<section class="blog-each">
								<div class="three-column clearfix">
									 <div class="blog-image-wrap">
										 <?php if($main_post_image) { ?>
		 								 <img class="blog-all-img" src="<?php echo $main_post_image; ?>" />
		 							 <?php } ?>
								 </div><!--.listing-image-wrap -->
								</div><!-- .three-column -->
							<?php get_template_part( 'content', get_post_format() );
						}
					}
					else { ?>
					<h2 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'edge' ); ?> </h2>
					<?php } ?>
          <!-- Custom Pagination from pagination.php -->
          <?php
          $edge_settings = edge_get_theme_options();
          if ( !class_exists( 'Jetpack') || class_exists( 'Jetpack') && !Jetpack::is_module_active( 'infinite-scroll' )){
            echo '<div class="container">';
            if ( function_exists('wp_pagenavi' ) ) :
              wp_pagenavi();
            else:
            global $wp_query;
              if ( $wp_query->max_num_pages > 1 ) : ?>
              <ul class="default-wp-page clearfix">
                <li class="next">
                  <?php next_posts_link( __( 'Older Posts &raquo;', 'edge' ) ); ?>
                </li>
                <li class="previous">
                  <?php previous_posts_link( __( '&laquo; Previous Page', 'edge' ) ); ?>
                </li>
              </ul>
              <?php  endif;
            endif;
            echo '</div> <!-- end .container -->';
          }?>
			</main> <!--#blog -->
		</div> <!--.one-column -->
	</div><!--.container -->
<?php get_footer(); ?>
