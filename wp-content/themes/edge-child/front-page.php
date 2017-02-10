<?php
/**
 * The template for displaying the Home Page.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

 get_header(); ?>
 <div class="container clearfix">
		<section id="welcome">
			<div class="one-column clearfix welcome">
				<div class="bpd-wrap clearfix">
					<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bpdCursive.png" />
				</div>
				<div class="bpd-welcome-wrap">
					<h3>Barb Palmer</h3>
					<h4 class="welcome-text">Realtor extraordinaire, whether buying or selling, working to make your home dreams come true!</h4>
				</div>
				<div class="bpd-welcome-wrap">
					<h3>Dave Palmer</h3>
					<h4 class="welcome-text">Assistant to Barb in all things home: details, paperwork, and of course, client happiness!</h4>
				</div>
			</div><!--.one-column-->
		</section>
	 </div><!--.container-->
 <section id="get-to-know-us">
	 <div class="colored-background clearfix">
		 <div class="one-column clearfix us">
			 <div>
				 <img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wCCC.png" />
			 </div>
			 <div class="intros">
				 <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
				 <h3>Warm</h3>
				 <p class="info-text">Devoted to keeping hearts & hearths Warm all over our whole community.</p>
			 </div>
			 <div class="intros">
				 <p><i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
				 <h3>Cool</h3>
				 <p class="info-text">Celebrating Cool fun times with dynamic neighborhoods, local music, and amazing restaurants.</p>
			 </div>
			 <div class="intros">
				 <p><i class="fa fa-coffee" aria-hidden="true"></i></p>
				 <h3>Calm</h3>
				 <p class="info-text">Keeping Calm and staying aware by embracing tea-time Happy Hour.</p>
			 </div>
			 <div class="intros">
				 <p><i class="fa fa fa-plug" aria-hidden="true"></i></p>
				 <h3>Connected</h3>
				 <p class="info-text">Knowing we're all Connected and welcoming our diversity, grateful to give back any way we can.</p>
			 </div>
			 <button class="btn-default us-btn"><a href="http://localhost:8888/barbplusdave/about/">Get to Know Us!</a></button>
		 </div><!--.one-column -->
	 </div><!--.colored-background -->
 </section>
 <section id="listings-blog-home">
	 <div class="container clearfix">
		 <section class="listings-home">
			 <div class="three-column entry-content clearfix">
				 <div class="main-heading">
					 <h2>Our Listings<a class="more" href="http://localhost:8888/barbplusdave/listings/">see all <span>&rsaquo;</span></a></h2>
				 </div>
				 <?php query_posts('posts_per_page=2&post_type=listings'); ?>
				 <?php while ( have_posts() ) : the_post();
				 $main_listing_image = get_field('main_listing_image');
				 $price = get_field('price');
				 $property_type = get_field('property_type');
				 $stories = get_field('stories');
				 $bedrooms = get_field('bedrooms');
				 $bathrooms = get_field('bathrooms');
				 $mls_number = get_field('mls_number');
				 $status = get_field('status');
				 ?>
				 <div class="main-info">
					 <h3>$<?php echo $price; ?>
						 <a class="more" href="<?php the_permalink(); ?>">learn more <span>&rsaquo;</span></a></h3>
						 <div class="listing-image-wrap">
							 <?php if($main_listing_image) { ?>
								 <img src="<?php echo $main_listing_image; ?>" />
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
										 <h4><?php the_title(); ?></h4>
									 </div><!--.main-info -->
								 <?php endwhile; // end of the loop. ?>
								 <?php wp_reset_query(); ?>
							 </div><!--.three-column -->
						 </section><!--.listings-home -->
						 <section class="blog-home">
							 <div class="two-column home-blog entry-content clearfix">
								 <div class="main-heading">
									 <h2>What are we up to now?<a class="more" href="http://localhost:8888/barbplusdave/blog/">more <span>&rsaquo;</span></a></h2>
								 </div>
								 <?php query_posts('posts_per_page=2&post_type=blog'); ?>
								 <?php while ( have_posts() ) : the_post();
								 $main_post_image = get_field('main_post_image');
								 ?>
								 <div class="main-info blog-main-info clearfix">
									 <h3><?php the_title(); ?></h3>
									 <?php if($main_post_image) { ?>
										 <img src="<?php echo $main_post_image; ?>" />
										 <?php } ?>
										 <p><?php the_excerpt(); ?><a class="blog-more" href="<?php the_permalink(); ?>"> read more <span>&rsaquo;</span></a></p>
									 </div>
								 <?php endwhile; ?>
								 <?php wp_reset_query(); ?>
							 </div>	<!--.two-column -->
						 </section><!--.blog-home -->
					 </div><!-- .container -->
				 </section> <!-- .listings-blog-home -->
				 <section id="instagram-feed">
					<div class="colored-background clearfix">
					 <div class="one-column clearfix insta-wrap">
						 <h2>The Latest from Instagram</h2>
             <!-- Testing ajax call -->
             <!-- <button class="gif">Get Gif Test</button>
             <div class="gifHere"></div> -->
             <!-- End Test -->
						 <?php echo do_shortcode( '[instagram-feed]' ); ?>
					 </div><!-- .one-column -->
				  </div><!-- .colored-background -->
				 </section>
				 <?php get_footer(); ?>
