<?php
/**
 * The template for displaying the Home Page.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header();
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
<?php }
	}else{ // for page/ post
		if(($layout != 'no-sidebar') && ($layout != 'full-width')){ ?>
<!-- <div id="primary"> -->
	<?php }
	}?>
	<!-- <main id="main"> -->
    <section id="get-to-know">
      <div class="one-column clearfix gtk">
				<div>
					<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wCCC.png" />
				</div>
				<div class="intros">
					<p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
					<p>Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie.</p>
				</div>
				<div class="intros">
					<p><i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
					<p>Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie. Muffin sweet tart apple pie. Muffin sweet tart apple pie.</p>
				</div>
				<div class="intros">
					<p><i class="fa fa-coffee" aria-hidden="true"></i></p>
					<p>Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie.</p>
				</div>
				<div class="intros">
					<p><i class="fa fa fa-plug" aria-hidden="true"></i></p>
					<p>Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie.</p>
				</div>
				<button class="btn-default gtk-btn">Get to Know Us!</button>

			</div>
    </section>
    <section id="listings-homepage">
      <div class="three-column entry-content clearfix">

        <h2>Our Listings</h2>
				<a href="#">more</a>
				<p>
          This is a test to see what will happen column-wise. Cake powder cake danish jelly beans macaroon gingerbread. Candy canes candy lemon drops croissant tart gingerbread carrot cake. Fruitcake tootsie roll cheesecake chupa chups lollipop chocolate cake cupcake icing. Tart biscuit tootsie roll candy canes macaroon pudding cupcake cake wafer. Ice cream cake chocolate candy chupa chups topping. Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie. Jelly-o cake cake jujubes chupa chups. Wafer chocolate powder tart sugar plum brownie. Brownie candy jelly-o candy canes powder biscuit topping gingerbread topping. Oat cake chocolate cake carrot cake. Croissant tiramisu cheesecake cupcake soufflé chocolate bar chocolate jelly-o. Croissant marshmallow croissant bonbon chocolate cake croissant powder.</p>
          <p>
            Cake powder cake danish jelly beans macaroon gingerbread. Candy canes candy lemon drops croissant tart gingerbread carrot cake. Fruitcake tootsie roll cheesecake chupa chups lollipop chocolate cake cupcake icing. Tart biscuit tootsie roll candy canes macaroon pudding cupcake cake wafer. Ice cream cake chocolate candy chupa chups topping. Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie. Jelly-o cake cake jujubes chupa chups. Wafer chocolate powder tart sugar plum brownie. Brownie candy jelly-o candy canes powder biscuit topping gingerbread topping. Oat cake chocolate cake carrot cake. Croissant tiramisu cheesecake cupcake soufflé chocolate bar chocolate jelly-o. Croissant marshmallow croissant bonbon chocolate cake croissant powder.</p>
      </div>
    </section>

    <section id="blog-homepage">
      <div class="two-column entry-content clearfix">
        <h2>This is the "Blog" excerpt of two blog posts.</h2>
        <p>
          This is a test to see what will happen column-wise. Cake powder cake danish jelly beans macaroon gingerbread. Candy canes candy lemon drops croissant tart gingerbread carrot cake. Fruitcake tootsie roll cheesecake chupa chups lollipop chocolate cake cupcake icing. Tart biscuit tootsie roll candy canes macaroon pudding cupcake cake wafer. Ice cream cake chocolate candy chupa chups topping. Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie. Jelly-o cake cake jujubes chupa chups. Wafer chocolate powder tart sugar plum brownie. Brownie candy jelly-o candy canes powder biscuit topping gingerbread topping. Oat cake chocolate cake carrot cake. Croissant tiramisu cheesecake cupcake soufflé chocolate bar chocolate jelly-o. Croissant marshmallow croissant bonbon chocolate cake croissant powder.</p>
          <p>
            Cake powder cake danish jelly beans macaroon gingerbread. Candy canes candy lemon drops croissant tart gingerbread carrot cake. Fruitcake tootsie roll cheesecake chupa chups lollipop chocolate cake cupcake icing. Tart biscuit tootsie roll candy canes macaroon pudding cupcake cake wafer. Ice cream cake chocolate candy chupa chups topping. Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie. Jelly-o cake cake jujubes chupa chups. Wafer chocolate powder tart sugar plum brownie. Brownie candy jelly-o candy canes powder biscuit topping gingerbread topping. Oat cake chocolate cake carrot cake. Croissant tiramisu cheesecake cupcake soufflé chocolate bar chocolate jelly-o. Croissant marshmallow croissant bonbon chocolate cake croissant powder.</p>
      </div>
    </section>

    <section id="instagram-feed">
      <div class="one-column clearfix">
        <h2>Instagram Feed will go here.</h2>
        <p>
          Cake powder cake danish jelly beans macaroon gingerbread. Candy canes candy lemon drops croissant tart gingerbread carrot cake. Fruitcake tootsie roll cheesecake chupa chups lollipop chocolate cake cupcake icing. Tart biscuit tootsie roll candy canes macaroon pudding cupcake cake wafer. Ice cream cake chocolate candy chupa chups topping. Fruitcake chocolate bar chupa chups. Powder cotton candy tiramisu icing donut chupa chups danish cheesecake. Muffin sweet tart apple pie. Jelly-o cake cake jujubes chupa chups. Wafer chocolate powder tart sugar plum brownie. Brownie candy jelly-o candy canes powder biscuit topping gingerbread topping. Oat cake chocolate cake carrot cake. Croissant tiramisu cheesecake cupcake soufflé chocolate bar chocolate jelly-o. Croissant marshmallow croissant bonbon chocolate cake croissant powder.</p>
      </div>
    </section>
	<?php
	if( has_post_thumbnail() && $edge_settings['edge_display_page_featured_image']!=0) { ?>
		<div class="post-image-content">
			<figure class="post-featured-image">
				<a href="<?php the_permalink();?>" title="<?php echo the_title_attribute('echo=0'); ?>">
				<?php the_post_thumbnail(); ?>
				</a>
			</figure><!-- end.post-featured-image  -->
		</div> <!-- end.post-image-content -->
	<?php }
	if( have_posts() ) {
		while( have_posts() ) {
			the_post(); ?>
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<article>
		<div class="entry-content clearfix">
			<!-- <?php the_content();
				wp_link_pages( array(
				'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'edge' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1
				) ); ?> -->
		</div> <!-- entry-content clearfix-->
		<?php  comments_template(); ?>
		</article>
	</section>
	<?php }
	} else { ?>
	<h1 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'edge' ); ?> </h1>
	<?php
	} ?>
	<!-- </main> <!-- #main -->
	<?php
if( 'default' == $layout ) { //Settings from customizer
	if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}else{ // for page/post
	if(($layout != 'no-sidebar') && ($layout != 'full-width')){
		echo '</div><!-- #primary -->';
	}
}
get_sidebar();
get_footer(); ?>
