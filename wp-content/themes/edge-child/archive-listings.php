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

get_header(); ?>
		<div class="container clearfix">
		 <div class="one-column clearfix">
			<main id="listings">
 			 <div class="main-heading">
 					 <h1>Our Listings</h1>
 			 </div>
				 <?php
					if( have_posts() ) {
						while( have_posts() ) {
							the_post();
							$main_listing_image = get_field('main_listing_image');
							$price = get_field('price');
							$status = get_field('status');
							$field = get_field_object('status');
			        $value = $field['value'];
			        $label = $field['choices'][ $value ];
							$bedrooms = get_field('bedrooms');
		 				 	$bathrooms = get_field('bathrooms');
		 				 	$mls_number = get_field('mls_number');
					?>
					<section class="listings-each">
						<div class="three-column clearfix">
							 <div class="listing-image-wrap">
								 <?php if($main_listing_image) { ?>
 								 <img class="listing-all-img" src="<?php echo $main_listing_image; ?>" />
 								 <?php if( $status == 'coming_soon' ) { ?>
 									 <span class="not-sold">Coming Soon!</span>
 								 <?php } ?>
 								 <?php if( $status == 'sale_pending' ) { ?>
 									 <span class="not-sold">Sale Pending</span>
 								 <?php } ?>
 								 <?php if( $status == 'sold' ) { ?>
 										<span class="sold">Sold!</span>
 								 <?php } ?>
 							 <?php } ?>
 							</div>
						</div><!-- .three-column -->
						<div class="listing-details">
						 <ul>
							 <li>Price: $<?php echo $price; ?></li>
							 <li>Bedrooms: <?php echo $bedrooms; ?></li>
							 <li>Bathrooms: <?php echo $bathrooms; ?></li>
							 <li>MLS #: <?php echo $mls_number; ?></li>
						 </ul>
						</div><!--.listing-details -->
						<?php get_template_part( 'content', get_post_format() );
								}
							}
						else { ?>
						<h2 class="entry-title"> <?php esc_html_e( 'No Listings Found.', 'edge' ); ?> </h2>
						<?php } ?>
						<?php get_template_part( 'pagination', 'none' ); ?>
				 </section>
			  </main>
			 </div><!-- .one-column -->
		</div><!-- .container -->
		<?php get_footer(); ?>
