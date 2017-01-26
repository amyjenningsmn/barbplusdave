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
        $property_type = get_field('property_type');
        $stories = get_field('stories');
        $bedrooms = get_field('bedrooms');
        $bathrooms = get_field('bathrooms');
        $mls_number = get_field('mls_number');
        $more = get_field('more_info_to_come');
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
          <?php the_content(); ?>
     </div>
     <div class="main-heading sub">
       <h2>Property Details</h2>
     </div>
      <div class="listing-single-info">
       <div class="three-column">
         <ul>
           <li>Property Type: <?php echo $property_type; ?></li>
           <li>Stories: <?php echo $stories; ?></li>
           <li>Bedrooms: <?php echo $bedrooms; ?></li>
           <li>Bathrooms: <?php echo $bathrooms; ?></li>
           <li>MLS Number: <?php echo $mls_number; ?></li>
         </ul>
       </div>
       <div class="three-column">
         <ul>
           <li>Property Type: <?php echo $property_type; ?></li>
           <li>Stories: <?php echo $stories; ?></li>
           <li>Bedrooms: <?php echo $bedrooms; ?></li>
           <li>Bathrooms: <?php echo $bathrooms; ?></li>
           <li>MLS Number: <?php echo $mls_number; ?></li>
         </ul>
       </div>
       <div class="three-column">
         <ul>
           <li>Property Type: <?php echo $property_type; ?></li>
           <li>Stories: <?php echo $stories; ?></li>
           <li>Bedrooms: <?php echo $bedrooms; ?></li>
           <li>Bathrooms: <?php echo $bathrooms; ?></li>
           <li>MLS Number: <?php echo $mls_number; ?></li>
         </ul>
       </div>
     </div>
      <?php endwhile; // end of the loop. ?>
      </section>
 		</div><!-- .one-column -->
 	</div><!-- .container -->
<?php get_footer(); ?>
