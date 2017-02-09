<?php
/**
* The template for displaying the footer.
*
* @package Theme Freesia
* @subpackage edge-child
* @since Edge 1.0
*/

$edge_settings = edge_get_theme_options();
if($edge_settings['edge_blog_layout'] == 'photography_layout' && !is_page() && !is_single()){
	if(class_exists('WooCommerce') && is_shop()): ?>
</div> <!-- end .container -->
<?php else: ?>
</div> <!-- end #main -->
<?php
endif;
}else{?>
</div> <!-- end .container -->
<?php
} ?>
</div> <!-- end #content -->
<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer clearfix">

	<div class="site-info" <?php if($edge_settings['edge-img-upload-footer-image'] !=''){?>style="background-image:url('<?php echo esc_url($edge_settings['edge-img-upload-footer-image']); ?>');" <?php } ?>>
		<div class="container">
			<div class="three-column contact">
				<div class="contact-wrap">
					<div class="contact-info">
						<img class="lar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lar.png" />
						<h3>Barb Palmer</h3>
						<h4>Realtor</h4>
						<p>4316 Upton Ave S, Suite 300</p>
						<p>Minneapolis, MN 55410</p></br>
						<p class="letter-space"> barbpalmerrealtor@gmail.com</p>
						<p class="letter-space">LakesAreaRealty.com</p>
						<img class="mls" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mls.png" />
						<img class="equal" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/equalHousing.png" />
					</div><!-- .contact-info -->
				</div><!-- .contact-wrap -->
			</div><!-- end .three-column contact-->
			<div class="three-column phone">
					<div class="phone-info">
						<?php
						if($edge_settings['edge_buttom_social_icons'] == 0):
							do_action('social_links');
						endif; ?>
						<div class="bullhorn-wrap">
							<div class="bullhorn">
								<img class="red-house" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/redHouse.png" />
							</div>
							<div class="phone-number">
								<p><a href="tel:6128770530" title="612-877-0530">612-877-0530</a></p>
								<p>Call or Text!</p>
							</div>
							<div class="love">
								<img class="love-word" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/love.png" />
							</div>
						</div><!--end .bullhorn-wrap-->
				</div>
			</div><!-- end .three-column .phone-->
			<div class="three-column newsletter">
				<div class="newsletter-wrap">
					<div class="newsletter-info">
						<p>Want to subscribe to our newsletter?</p>
						<!-- shortcode for local below -->
						<!-- <?php echo do_shortcode( '[mc4wp_form id="172"]' ); ?> -->
						<!-- shortcode for staging below -->
						<?php echo do_shortcode( '[mc4wp_form id="163"]' ); ?>
					</div>
				</div>
			</div><!-- end .three-column -->
			<div class="one-column clearfix">
				<p class="copy">&copy; 2017 Barb Plus Dave<span class="grey">  ::: </span>B+D Cover Photo <a href="http://www.abernathyphoto.com/" target="_blank">&copy; Abernathy Photo</a></p>
			</div>
		<div style="clear:both;"></div>
		</div> <!-- end .container -->
	</div> <!-- end .site-info -->
	<?php
	$disable_scroll = $edge_settings['edge_scroll'];
	if($disable_scroll == 0):?>
	<div class="go-to-top"><a title="<?php esc_html_e('Go to Top','edge');?>" href="#masthead"><i class="fa fa-angle-double-up"></i></a></div> <!-- end .go-to-top -->
<?php endif; ?>
</footer> <!-- end #colophon -->
</div> <!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>
