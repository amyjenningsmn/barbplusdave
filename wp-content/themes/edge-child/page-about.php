<?php
/**
 * Template Name: About
 * Template Post Type: post, page, event
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(); ?>

<div id="content">
 <div class="container clearfix">
		<section id="hello">
			<div class="one-column clearfix hello">
				<div class="hello-wrap">
					<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hello.png" />
					<img class="tag-sub" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/niceToMeetYou.png" />
				</div>
				<div class="frame-wrap">
					<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/barbPicCircle.png" />
					<h3>Barb Palmer</h3>
					<p class="info-text">Barb’s contagious energy and savvy business skills have built her a successful and rewarding real estate practice all over the Twin Cities. She is dedicated to providing top notch service while creating an experience that is fun beyond expectations!</p>
          <p class="info-text">Buyers and Sellers appreciate the way she guides them through the process with dedication, assurance and joy. Referrals from past clients and recommendations from family, friends, and colleagues have kept her business flourishing.</p>
          <p class="info-text">When she’s not hard at work helping clients with their real estate needs, you'll most likely find her enjoying local music, walking around her beloved Lake Harriet, or sharing good food with friends. She is a long time Minnesota resident and will be thrilled to show you around her town.  
          </p>
				</div>
				<div class="frame-wrap">
					<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/davePicCircle.png" />
					<h3>Dave Palmer</h3>
					<p class="info-text">Dave is Assistant to Barb, dedicated to providing honest, detailed service to all clients, making sure facts are communicated clearly, respecting both sides of any transaction.</p>
          <p class="info-text">Dave comes to real estate after working for 36 years as a Camp Director, and as a leader in non-profit operations. Along the way he’s acquired a wealth of knowledge in negotiating, and his experience in construction has been critical for making decisions in multi-million dollar projects. Dave is perhaps most valued as a colleague, mentor and friend.</p>
          <p class="info-text">Locally grown, Dave enjoys all the area has to offer. Not surprisingly, Dave loves camping and often disappears deep into the woods…but not until after the closing!</p>
        </div>
			</div><!--.one-column-->
		</section>
	 </div><!--.container-->
  </div><!--.content -->
	 <section id="why-us">
		 <div class="colored-background clearfix">
			<div class="one-column clearfix us us-first">
					<div>
						<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/whyUs.png" />
					</div>
					<div class="intros">
						<p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
						<h3>Warm</h3>
						<p class="info-text">Devoted to keeping hearts & hearths Warm all over our whole community.</p>
					</div>
					<div class="intros">
						<p><i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
						<h3>Cool</h3>
						<p class="info-text">Celebrating Cool fun times with dynamic neighborhoods, local music, and amazing restaurants.</p>
					</div>
					<div class="intros">
						<p><i class="fa fa-coffee" aria-hidden="true"></i></p>
						<h3>Calm</h3>
						<p class="info-text">Keeping Calm and staying aware by embracing tea-time Happy Hour.</p>
					</div>
					<div class="intros">
						<p><i class="fa fa fa-plug" aria-hidden="true"></i></p>
						<h3>Connected</h3>
						<p class="info-text">Knowing we're all Connected and welcoming our diversity, grateful to give back any way we can.</p>
					</div>
				</div>
				<div class="one-column clearfix us us-second">
					<div class="intros">
						<p><i class="fa fa-paperclip" aria-hidden="true"></i></p>
						<h3>Smart</h3>
						<p class="info-text">Intelligent and focused on a distinctive client experience where straight forward details meet Smart choices.</p>
					</div>
					<div class="intros">
						<p><i class="fa fa-diamond" aria-hidden="true"></i></p>
						<h3>Buy</h3>
						<p class="info-text">When you're looking to Buy, we have a gift for helping you find a sweet gem where you will sparkle!</p>
					</div>
					<div class="intros">
						<p><i class="fa fa-fort-awesome" aria-hidden="true"></i></p>
						<h3>Sell</h3>
						<p class="info-text">Ready and set, enjoyable house Selling is our specialty...start packing.</p>
					</div>
					<div class="intros">
						<p><i class="fa fa-smile-o" aria-hidden="true"></i></p>
						<h3>Happy</h3>
						<p class="info-text">From first meeting to closing and beyond, we'll bring our Happy positive best to your home needs and process.</p>
					</div>
				</div> <!--.one-column-->
				<div class="pdf-buttons clearfix">
					<button class="btn-default us-btn-left"><a href="http://localhost:8888/barbplusdave/wp-content/uploads/2017/02/BarbPlusDaveBuyersGuide.pdf">View our Buyers Guide</a></button>
					<button class="btn-default us-btn-right"><a href="http://localhost:8888/barbplusdave/wp-content/uploads/2017/02/BarbPlusDaveSellersGuide.pdf">View our Sellers Guide</a></button>
				</div>
			</div> <!--.colored-background-->
	  </section>
		<section id="word-street">
		 <div class="container clearfix">
			<div class="one-column clearfix word-street">
				<div class="ws-wrap">
					<img class="tag" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wordOnTheStreet.png" />
          <?php echo do_shortcode( '[testimonial_rotator id="182"]' ); ?>

				</div>
			</div> <!--.one-column -->
		 </div> <!--.container -->
		</section>
<?php get_footer(); ?>
