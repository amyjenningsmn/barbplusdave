<?php
/**
 * Template Name: Contact
 * Template Post Type: post, page, event
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(); ?>

<div id="content">
 <div class="container clearfix">
		<section id="contact-intro">
			<div class="one-column clearfix contact-intro">
				<div class="contact-frames-wrap">
					<div class="three-column clearfix">
						<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle1.png" />
					</div>
					<div class="three-column clearfix">
						<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle1.png" />
					</div>
					<div class="three-column clearfix">
						<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle1.png" />
					</div>
				</div><!--.contact-frames-wrap -->
				<div class="contact-intro-text">
					<div class="contact-intro-bpd-wrap">
							<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bpdCursive.png" />
					</div>
					<div class="contact-intro-info">
						<p>Here is some text letting them know if they want to contact you, you'd be delighted. Do they have questions? You'd love to answer them. It's all good in the hood. Mi Casa es Su Casa. We'll bring the cookies. Etc.
						</p>
					</div>
				</div>
			</div><!--.contact-intro-wrap -->
		</section><!--#contact-intro-wrap -->
	<?php
	if( have_posts() ) {
		while( have_posts() ) {
			the_post(); ?>
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<article>
		<div class="entry-content bpd-form clearfix">
			<?php the_content();
				wp_link_pages( array(
				'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'edge' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1
				) ); ?>
		</div> <!-- entry-content clearfix-->
		</article>
	</section>
	<?php }
	} else { ?>
	<h1 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'edge' ); ?> </h1>
	<?php
	} ?>

	</div><!--.container -->
</div><!--.content -->
<?php get_footer(); ?>
