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

        $main_image = get_field('main_image');
        // ^^ “get_field” is function that comes with ACF, it takes one param, the computer-readable name of the field
        $price = get_field('price');
        $property_type = get_field('property_type');
        $stories = get_field('stories');
        $bedrooms = get_field('bedrooms');
        $bathrooms = get_field('bathrooms');
        $mls_number = get_field('mls_number');
     ?>

     <!-- Left off here - need to address the rest -->

      <article class="listing">

        <div class="listing-images">
          <?php if($main_image) { ?>
            <img src="<?php echo $main_image; ?>" />
          <?php } ?>
          <?php if($image_1) { ?>
            <img src="<?php echo $image_1; ?>" />
          <?php } ?>
          <?php if($image_2) { ?>
            <img src="<?php echo $image_2; ?>" />
          <?php } ?>
        </div>

            <!-- <h2><?php the_title(); ?></h2> -->
            <h3>Price: $<?php echo $price; ?></h5>
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
