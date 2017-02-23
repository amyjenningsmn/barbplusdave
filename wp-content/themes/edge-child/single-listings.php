<?php
/**
 * The template for displaying single listings
 *
 *
 * @package WordPress
 * @subpackage Edge
 * @since Edge 1.1.1.1
 */

 get_header(); ?>
 <?php while ( have_posts() ) : the_post();

 $main_listing_image = get_field('main_listing_image');
 $price = get_field('price');
 $open_house = get_field('open_house');
 $more = get_field('more_info_to_come');
 $gallery = get_field('gallery');
 $living_area = get_field('living_area');
 $lot_size = get_field('lot_size');
 $year_built = get_field('year_built');
 $stories = get_field('stories');
 $bedrooms = get_field('bedrooms');
 $bathrooms = get_field('bathrooms');
 $taxes = get_field('taxes');
 $mls_number = get_field('mls_number');
 $garage = get_field('garage');
 $virtual_tour_link = get_field('virtual_tour_link');
 $three_d_model_link = get_field('three_d_model_link');
 $embed_link = get_field('embed_link');
 // $status = get_field('status');
 $field = get_field_object('status');
 $value = $field['value'];
 $label = $field['choices'][ $value ];
?>

 <?php if ($open_house): ?>
   <div class="second-nav clearfix">
     <h3 class="open-house-banner"><?php echo $open_house; ?></h3>
   </div>
   <?php endif; ?>
  <div class="container clearfix">
 		<div class="one-column clearfix">
     <section id="single-listings">
      <div class="main-heading">
        <div>
          <h1><?php echo the_title(); ?></h1>
          <?php if ($price) { ?>
            <h2>$<?php echo $price; ?></h2>
            <?php } else { ?>
            <h2>Just Announced!<?php } ?></h2>
        </div>
        <div>
          <h2>Status: <?php echo $label; ?></h2>
        </div>

     </div>
     <div class="listing-images">
          <?php echo $gallery; ?>
          <?php if ($embed_link): ?>
            <span class="virtual-listing"><?php echo $embed_link; ?></span><?php endif; ?>
          <div class="listing-buttons">
            <?php if ($virtual_tour_link): ?>
              <button class="btn-default btn-listing"><a href="<?php echo $virtual_tour_link; ?>" target="_blank">Click to see the Virtual Tour</a></button>
              <?php endif; ?>
            <?php if ($three_d_model_link): ?>
              <button class="btn-default btn-listing"><a href="<?php echo $three_d_model_link; ?>" target="_blank">Click to see the 3d Model</a></button>
            <?php endif; ?>
          </div>
          <?php the_content(); ?>
     </div>
     <div class="main-heading sub">
       <h2>Property Details <?php if( $more ): ?>
	        <span> - More Info Coming Soon!</span>
	       <?php endif; ?></h2>
     </div>
      <div class="listing-single-info">
       <div class="listing-fields">
         <ul>
           <li><?php if ($stories): ?>Stories:  <?php echo $stories; ?><?php endif; ?></li>
           <li><?php if ($bedrooms): ?>Bedrooms:  <?php echo $bedrooms; ?><?php endif; ?></li>
           <li><?php if ($bathrooms): ?>Bathrooms:  <?php echo $bathrooms; ?><?php endif; ?></li>
         </ul>
       </div>
       <div class="listing-fields">
         <ul>
           <li><?php if ($living_area): ?>Living Area:  <?php echo $living_area; ?> Square Feet<?php endif; ?></li>
           <li><?php if ($lot_size): ?>Lot Size:  <?php echo $lot_size; ?><?php endif; ?></li>
           <li><?php if ($year_built): ?>Year Built:  <?php echo $year_built; ?><?php endif; ?></li>
         </ul>
       </div>
       <div class="listing-fields">
         <ul>
           <li><?php if ($garage): ?>Garage:  <?php echo $garage; ?><?php endif; ?></li>
           <li><?php if ($mls_number): ?>MLS #:  <?php echo $mls_number; ?><?php endif; ?></li>
           <li><?php if ($taxes): ?>Taxes <?php echo $taxes; ?><?php endif; ?></li>
         </ul>
       </div>
     </div>
     <ul class="default-wp-page clearfix">
       <li class="next"> <?php previous_post_link( '%link', 'Next Listing <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'edge' ) . '</span>' ); ?> </li>
       <li class="previous"> <?php next_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'edge' ) . '</span> Previous Listing' ); ?> </li>
     </ul>
      <?php endwhile; // end of the loop. ?>
      </section>
 		</div><!-- .one-column -->
 	</div><!-- .container -->
<?php get_footer(); ?>
