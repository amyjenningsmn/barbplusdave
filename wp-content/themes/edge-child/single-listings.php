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

 	<div id="primary" class="site-content">
 		<div id="content" role="main">

 			<?php while ( have_posts() ) : the_post();

        $main_image = get_field('main_listing_image');
        $price = get_field('price');
        $property_type = get_field('property_type');
        $stories = get_field('stories');
        $bedrooms = get_field('bedrooms');
        $bathrooms = get_field('bathrooms');
        $mls_number = get_field('mls_number');
     ?>

      <article class="listing">

        <div class="listing-images">
          <?php if($main_listing_image) { ?>
            <img src="<?php echo $main_listing_image; ?>" />
          <?php } ?>
        </div>

            <!-- <h2><?php the_title(); ?></h2> -->
            <h3>Price: $<?php echo $price; ?></h3>
            <h4>Property Type: <?php echo $property_type; ?></h4>
            <h4>Stories: <?php echo $stories; ?></h4>
            <h4>Bedrooms: <?php echo $bedrooms; ?></h4>
            <h4>Bathrooms: <?php echo $bathrooms; ?></h4>
            <h4>MLS Number: <?php echo $mls_number; ?></h4>

            <?php the_content(); ?>

        </article>


 			<?php endwhile; // end of the loop. ?>

 		</div><!-- #content -->
 	</div><!-- #primary -->


 <?php get_footer(); ?>
