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
  <div class="container clearfix">
 		<div class="one-column clearfix">
      <section id="single-listings">

        <?php while ( have_posts() ) : the_post();

        $main_listing_image = get_field('main_listing_image');
        $price = get_field('price');
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
        // $status = get_field('status');
        $field = get_field_object('status');
        $value = $field['value'];
        $label = $field['choices'][ $value ];
     ?>
     <div class="main-heading">
       <h1><?php echo the_title(); ?></h1>
        <h2>$<?php echo $price ?><span class=" right status-<?php echo $value; ?>">Status: <?php echo $label; ?></span></h2>
     </div>
     <div class="listing-images">
          <?php echo $gallery; ?>
          <?php the_content(); ?>
     </div>
     <div class="main-heading sub">
       <h2>Property Details <?php if( $more ): ?>
	        <span> - More Info Coming Soon!</span>
	       <?php endif; ?></h2>
     </div>
      <div class="listing-single-info">
       <div class="three-column">
         <ul>
           <li><?php if ($stories): ?>Stories:  <?php echo $stories; ?><?php endif; ?></li>
           <li><?php if ($bedrooms): ?>Bedrooms:  <?php echo $bedrooms; ?><?php endif; ?></li>
           <li><?php if ($bathrooms): ?>Bathrooms:  <?php echo $bathrooms; ?><?php endif; ?></li>
         </ul>
       </div>
       <div class="three-column">
         <ul>
           <li><?php if ($living_area): ?>Living Area:  <?php echo $living_area; ?> Square Feet<?php endif; ?></li>
           <li><?php if ($lot_size): ?>Lot Size:  <?php echo $lot_size; ?><?php endif; ?></li>
           <li><?php if ($year_built): ?>Year Built:  <?php echo $year_built; ?><?php endif; ?></li>
         </ul>
       </div>
       <div class="three-column">
         <ul>
           <li><?php if ($garage): ?>Garage:  <?php echo $garage; ?><?php endif; ?></li>
           <li><?php if ($mls_number): ?>MLS #:  <?php echo $mls_number; ?><?php endif; ?></li>
           <li><?php if ($taxes): ?>Taxes <?php echo $taxes; ?><?php endif; ?></li>
         </ul>
       </div>
     </div>
      <?php endwhile; // end of the loop. ?>
      </section>
 		</div><!-- .one-column -->
 	</div><!-- .container -->
<?php get_footer(); ?>
