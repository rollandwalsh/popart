<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
 
	 <a class="cta">Get In Touch</a>

	<section class="home-video">
		<div class="row">
			<div class="large-12 columns" id="heroText" style="display: none;">
				<h3>Behind Every Inefficiency, Opportunity.</h3>
				<h5 style="opacity: 0;">At today's pace, even the most celebrated companies struggle to optimize<br>efficiencies. Assets may be in chaos. Legacy technology outdated.<br>New hire onboarding laborious and slow. That's where we come in.</h5>
			</div>
		</div>
	</section>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page-home" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
       <div class="entry-content slide-element">
           <?php the_content(); ?>
           <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
       </div>
       <footer>
           <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
           <p><?php the_tags(); ?></p>
       </footer>
       <?php do_action( 'foundationpress_page_before_comments' ); ?>
       <?php comments_template(); ?>
       <?php do_action( 'foundationpress_page_after_comments' ); ?>
   </article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>
 
 <div class="home-recent-projects">
	<h3 class="text-center">Recent Projects</h3>
	<div class="text-center">
		<i class="fa fa-3x fa-angle-down"></i>
	</div>
	
	<div class="row">
		<div class="medium-6 columns slide-element">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_Yogi_a.png" alt="Yogi" class="rp-visible">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_Yogi_b.png" alt="Yogi">
		</div>
		<div class="medium-6 columns slide-element">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_Onboarding_Assist_a.png" alt="Onboarding Assist" class="rp-visible">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_Onboarding_Assist_b.png" alt="Onboarding Assist">
		</div>
		<div class="medium-6 columns slide-element">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_BAM_a.png" alt="BAM" class="rp-visible">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_BAM_b.png" alt="BAM">
		</div>
		<div class="medium-6 columns slide-element">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_SmartSource_a.png" alt="Smart Source" class="rp-visible">
			<img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Spotlight_599x598/PA_SmartSource_b.png" alt="Smart Source">
		</div>
	</div>
 </div>
 
 <div class="home-twitter-feed">
	 <div class="text-center">
		 <i class="fa fa-2x fa-twitter slide-element"></i>
	 </div>

	 <div id="twitterSlick"> 
		 <div>
			 <span class="tf-timestamp">1:27 pm - 10 Oct 2016</span>
			 <span class="tf-content">Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
		 </div>
		 <div>
			 <span class="tf-timestamp">1:27 pm - 10 Oct 2016</span>
			 <span class="tf-content">Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
		 </div>
		 <div>
			 <span class="tf-timestamp">1:27 pm - 10 Oct 2016</span>
			 <span class="tf-content">Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
		 </div>
		 <div>
			 <span class="tf-timestamp">1:27 pm - 10 Oct 2016</span>
			 <span class="tf-content">Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
		 </div>
		 <div>
			 <span class="tf-timestamp">1:27 pm - 10 Oct 2016</span>
			 <span class="tf-content">Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
		 </div>
	 </div>
 </div>
 
 <div class="home-work-together slide-element">
	 <div class="wt-row">
		 <div class="medium-9 large-7 columns text-center">
			 <h3 class="slide-element">Let's Work Together</h3>
			 <h5 class="slide-element">Let's talk. Better yet, meet. Tell us your pain points. Show us your wish lists. It's likely we've wrestled with challenges similar enough to give us both a running start. Collaboration conquers all.</h5>
		 </div>
	 </div>
	 <div class="wt-row">
		 <div class="medium-6 large-5 columns text-center">
			 <img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Rocket_icon.svg" alt="New Business" class="grow-element" style="height: 2.25rem">
			 <h4>New Business</h4>
			 <span class="wt-phone">+1(503)347 4700</span>
			 <a href="#">hello@popart.com</a>
		 </div>
		 <div class="medium-6 large-5 columns text-center">
			 <img src="/wordpress/wp-content/themes/FoundationPress/assets/images/Star_icon.svg" alt="Join Our Team" class="grow-element" style="height: 2rem">
			 <h4>Join Our Team</h4>
			 <span class="wt-phone">+1(503)242 4292</span>
			 <a href="#">career@popart.com</a>
		 </div>
	 </div>
 </div>
 
 <script>
	$(document).ready(function(){
		$('#heroText').delay( 1500 ).fadeIn( 750 );
		$('#heroText h5').delay( 3000 ).fadeIn( 750, function() {
     $(this).fadeTo( "slow", 1 );
    })
		
	  $('#twitterSlick').slick({
		  dots: true,
		  autoplay: true,
		  autoplaySpeed: 4500,
		  speed: 1500
	  });
	});
	
	(function($) {
	  $.fn.visible = function(partial) {
	    
	      var $t            = $(this),
	          $w            = $(window),
	          viewTop       = $w.scrollTop(),
	          viewBottom    = viewTop + $w.height(),
	          _top          = $t.offset().top,
	          _bottom       = _top + $t.height(),
	          compareTop    = partial === true ? _bottom : _top,
	          compareBottom = partial === true ? _top : _bottom;
	    
	    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
	
	  };
	    
	})(jQuery);
	
	$(window).scroll(function(event) {
	  
	  $(".slide-element").each(function(i, el) {
	    var el = $(el);
	    if (el.visible(true)) {
	      el.addClass("animated slideInUp"); 
	    }
	  });
	  
	  $(".grow-element").each(function(i, el) {
	    var el = $(el);
	    if (el.visible(true)) {
	      el.addClass("grow"); 
	    }
	  });
	  
	});
 </script>

 <?php get_footer();
