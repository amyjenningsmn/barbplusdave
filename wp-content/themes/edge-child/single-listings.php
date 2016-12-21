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

        $image_1 = get_field('image_1');
        // ^^ “get_field” is function that comes with ACF, it takes one param, the computer-readable name of the field
        $street = get_field('street');
        $city = get_field('city');
        $zipcode = get_field('zipcode');
        $price = get_field('price');
        $bedrooms = get_field('bedrooms');
        $bathrooms = get_field('bathrooms');
     ?>

     <!-- Left off here - need to address the rest -->

        <!-- <article class="case-study">
          <aside class="case-study-sidebar">
            <h2><?php the_title(); ?></h2>
            <h5><?php echo $services; ?></h5>
            <h6>Client: <?php echo $client; ?></h6>

            <?php the_content(); ?>

            <p><strong><a href="<?php echo $site_link; ?>">Site Link</a></strong></p>
          </aside>

          <div class="case-study-images">
            <?php if($image_1) { ?>
              <img src="<?php echo $image_1; ?>" />
            <?php } ?>
            <?php if($image_2) { ?>
              <img src="<?php echo $image_2; ?>" />
            <?php } ?>
            <?php if($image_3) { ?>
              <img src="<?php echo $image_3; ?>" />
            <?php } ?>
          </div>
        </article> -->


 			<?php endwhile; // end of the loop. ?>

 		</div><!-- #content -->
 	</div><!-- #primary -->


 <?php get_footer(); ?>
