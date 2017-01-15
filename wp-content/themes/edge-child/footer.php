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
    <div class="three-column">
      <h3>Barb Palmer</h3>
      <h4>Lakes Area Realty</h4>
      <p>4316 Upton Ave S, Suite 300</p>
      <p>Minneapolis, MN 55410</p>
    </div><!-- end .column-3'-->


    <div class="container">
      <div class="three-column">
        <div class="love">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/love.png" />
        </div>
        <div class="bullhorn">
          <p><i class="fa fa-bullhorn" aria-hidden="true"></i>612-877-0530</br>Call or Text!</p>
        </div>
      </div><!-- end .column-3'-->

      <div class="three-column">
  	<?php
  		if($edge_settings['edge_buttom_social_icons'] == 0):
  			do_action('social_links');
  		endif; ?>
      <p>Need to include a Newsletter Signup here</p>
      </div><!-- end .column-3'-->

      <div class="copyright">
        <p>&copy; 2017 Barb Plus Dave</p>
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
