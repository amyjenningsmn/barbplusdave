<?php
/**
 * The template for archived Listings posts
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header();
	$edge_settings = edge_get_theme_options();
	global $edge_content_layout;
	if( $post ) {
		$layout = get_post_meta( $post->ID, 'edge_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}
	if( 'default' == $layout ) { //Settings from customizer
		if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')){ ?>
			<!-- <div id="primary"> -->
				<?php }
	}?>
				<main id="main" class="site-main clearfix">
					<?php
					if( have_posts() ) {
						while( have_posts() ) {
							the_post();
							$main_listing_image = get_field('main_listing_image');
							$price = get_field('price');
							$field = get_field_object('status');
			        $value = $field['value'];
			        $label = $field['choices'][ $value ];?>
							<div class="listing-images">
			          <?php if($main_listing_image) { ?>
			            <img src="<?php echo $main_listing_image; ?>" />
									<h3>Price: $<?php echo $price; ?></h3>
									<h4>Status: <span class="status-<?php echo $value; ?>"><?php echo $label; ?></span></h4>
			          <?php } ?>
			        </div>

							<?php get_template_part( 'content', get_post_format() );
						}
					}
					else { ?>
					<h2 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'edge' ); ?> </h2>
					<?php } ?>
				</main> <!-- #main -->
				<?php get_template_part( 'pagination', 'none' );
				if( 'default' == $layout ) { //Settings from customizer
					if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')): ?>
						<!-- </div>  #primary --> 
						<?php endif;
				}
// get_sidebar();
get_footer(); ?>
