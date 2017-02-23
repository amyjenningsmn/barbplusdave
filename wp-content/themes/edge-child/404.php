<?php
/**
 * The template for displaying 404 pages
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
get_header(); ?>

<main id="main" class="site-main clearfix">
	<article id="post-0" class="post error404 not-found">
		<section class="error-404 not-found">
			<header class="page-header">
				<h2 class="page-title"> <?php esc_html_e( 'Oops! Something went wrong. Sorry about that! Please try again.', 'edge' ); ?> </h2>
			</header> <!-- .page-header -->
		</section> <!-- .error-404 -->
	</article> <!-- #post-0 .post .error404 .not-found -->
</main> <!-- #main -->
<?php get_footer(); ?>
