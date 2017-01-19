<?php
/**
 * The template for displaying single blog posts
 *
 *
 * @package WordPress
 * @subpackage Edge
 * @since Edge 1.1.1.1
 */

 get_header(); ?>

 	<div id="primary" class="site-content">
 		<div id="content" role="main">
      <article class="blog-single">
        <?php while ( have_posts() ) : the_post();
          $main_post_image = get_field('main_post_image');
          $post_image_1 = get_field('post_image_1');
          $post_image_2 = get_field('post_image_2');
          $post_image_3 = get_field('post_image_3');
          $post_image_4 = get_field('post_image_4');
          $post_image_5 = get_field('post_image_5');
          $post_image_6 = get_field('post_image_6');
        ?>
        <div class="blog-single-wrap">
          <h2><?php the_title(); ?></h2>
          <h3><?php the_date(); ?></h3>
          <?php if($main_post_image) { ?>
            <img src="<?php echo $main_post_image; ?>" />
          <?php } ?>

          <p><?php the_content(); ?></p>
        </div>
        <div class="blog-single-gallery">
          <?php if($post_image_1) { ?>
            <img src="<?php echo $post_image_1; ?>" />
          <?php } ?>
          <?php if($post_image_2) { ?>
            <img src="<?php echo $post_image_2; ?>" />
          <?php } ?>
          <?php if($post_image_3) { ?>
            <img src="<?php echo $post_image_3; ?>" />
          <?php } ?>
          <?php if($post_image_4) { ?>
            <img src="<?php echo $post_image_4; ?>" />
          <?php } ?>
          <?php if($post_image_5) { ?>
            <img src="<?php echo $post_image_5; ?>" />
          <?php } ?>
          <?php if($post_image_6) { ?>
            <img src="<?php echo $post_image_6; ?>" />
          <?php } ?>
        </div>

      <?php if(previous_post_link()) { ?>
        <h4><?php previous_post_link(); ?>: Previous Post</h4>
      <?php } ?>
      <?php if(next_post_link()) { ?>
        <h4>Next Post: <?php next_post_link(); ?></h4>
      <?php } ?>
      <?php endwhile; // end of the loop. ?>
  <!--  Why isn't this displaying the h4 content? -->
  </article>



 		</div><!-- #content -->
 	</div><!-- #primary -->


 <?php get_footer(); ?>
