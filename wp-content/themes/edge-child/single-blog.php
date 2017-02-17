<?php
 /**
  * The template for displaying all single Blog posts.
  *
  * @package Theme Freesia
  * @subpackage Edge
  * @since Edge 1.0
  */

 get_header(); ?>
 <div id="content">
  <div class="container clearfix">
  <?php
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
 <!-- If sidebar is added, use "primary" -->
 <?php }
 	}else{ // for page/ post
 		if(($layout != 'no-sidebar') && ($layout != 'full-width')){ ?>
 <!-- <div id="primary"> -->
 	<?php }
 	}?>
 	<main id="main" class="site-main clearfix">
  <section id="single-blog">
 	<?php global $edge_settings;
 	if( have_posts() ) {
 		while( have_posts() ) {
 			the_post();
      $main_post_image = get_field('main_post_image'); ?>
 			<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
 				<header class="entry-header">
 					<?php
 					$entry_format_meta_blog = $edge_settings['edge_entry_meta_blog'];
 					if($entry_format_meta_blog == 'show-meta' ){?>
          <div class="bpd-post-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="entry-meta">
 						<?php
 						$format = get_post_format();
 						if ( current_theme_supports( 'post-formats', $format ) ) {
 							printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
 								sprintf( ''),
 								esc_url( get_post_format_link( $format ) ),
 								get_post_format_string( $format )
 							);
 						} ?>
 						<span class="author vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php the_author(); ?>"><i class="fa fa-user"></i>
 						<?php the_author(); ?> </a></span> <span class="posted-on"><a title="<?php echo esc_attr( get_the_time() ); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>
 						<?php the_time( get_option( 'date_format' ) ); ?> </a></span>
 					</div> <!-- end .entry-meta -->
 					<?php } ?>
 				</header> <!-- end .entry-header -->

				<div class="post-image-content">
					<figure class="post-featured-image">
            <?php if($main_post_image) { ?>
   					 <img src="<?php echo $main_post_image; ?>" />
   				 <?php } ?>
					</figure><!-- end.post-featured-image  -->
				</div> <!-- end.post-image-content -->

 		<div class="entry-content clearfix">
 			<?php the_content();
 			wp_link_pages( array(
 				'before'			=> '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'edge' ),
 				'after'			=> '</div>',
 				'link_before'	=> '<span>',
 				'link_after'	=> '</span>',
 				'pagelink'		=> '%',
 				'echo'			=> 1
 			) ); ?>
 		</div> <!-- .entry-content -->
 		<?php $disable_entry_format = $edge_settings['edge_entry_format_blog'];
 			if($disable_entry_format =='show' || $disable_entry_format =='show-button' || $disable_entry_format =='hide-button'){ ?>
 				<footer class="entry-footer">
 					<?php if($disable_entry_format !='show-button'){ ?>
 					<!-- <span class="cat-links">
 					<?php esc_html_e('Category : ','edge');  the_category(', '); ?> -->
 					<!-- </span>  -->
          <!-- end .cat-links -->
 					<?php $tag_list = get_the_tag_list( '', __( ', ', 'edge' ) );
 						if(!empty($tag_list)){ ?>
 						<span class="tag-links">
 						<?php   echo $tag_list; ?>
 						</span> <!-- end .tag-links -->
 						<?php }
 					} ?>
 				</footer> <!-- .entry-meta -->
 			<?php }
 				if( is_attachment() ) { ?>
 				<ul class="default-wp-page clearfix">
 					<li class="previous"> <?php previous_image_link( false, __( '&larr; Previous', 'edge' ) ); ?> </li>
 					<li class="next">  <?php next_image_link( false, __( 'Next &rarr;', 'edge' ) ); ?> </li>
 				</ul>
 				<?php } else { ?>
 				<ul class="default-wp-page clearfix">
 					<li class="previous"> <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'edge' ) . '</span> %title' ); ?> </li>
 					<li class="next"> <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'edge' ) . '</span>' ); ?> </li>
 				</ul>
 					<?php }
 				comments_template(); ?>
 			</article>
 		</section> <!-- .post -->
 	<?php }
 		}
 	else { ?>
 	<h1 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'edge' ); ?> </h1>
 	<?php } ?>
 	</main> <!-- #main -->
 	<?php
 	if( 'default' == $layout ) { //Settings from customizer
 		if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')): ?>
 <!-- </div>--> <!-- #primary -->
 <?php endif;
 }else{ // for page/post
 	if(($layout != 'no-sidebar') && ($layout != 'full-width')){
 	// 	echo '</div>'<!-- #primary -->';
 	}
}
 // get_sidebar(); ?>
  </div>
 </div>
 <?php get_footer(); ?>
