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
 
	<a class="cta" id="homeCTA">Get In Touch</a>

	<section class="home-video">
		<div class="home-video-color">
			<div class="row">
				<div class="large-12 columns" id="heroText">
					<h3>Behind Every Inefficiency, Opportunity.</h3>
					<h5>At today's pace, even the most celebrated companies struggle to optimize<br>efficiencies. Assets may be in chaos. Legacy technology outdated.<br>New hire onboarding laborious and slow. That's where we come in.</h5>
				</div>
			</div>
		</div>
	</section>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page-home" class="parallax slide-element" role="main">
	 <div class="row">
		 <?php do_action( 'foundationpress_before_content' ); ?>
		 <?php while ( have_posts() ) : the_post(); ?>
	   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
	       <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
	       <div class="entry-content">
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
 </div>
 
 <div class="home-recent-projects">
	<h3 class="text-center">Recent Projects</h3>
	<div class="text-center">
		<i class="fa fa-3x fa-angle-down"></i>
	</div>
	
	<div class="row">
		<div class="medium-6 columns parallax slide-element">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_Yogi_a.png" alt="Yogi" class="rp-visible">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_Yogi_b.png" alt="Yogi">
		</div>
		<div class="medium-6 columns parallax slide-element">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_Onboarding_Assist_a.png" alt="Onboarding Assist" class="rp-visible">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_Onboarding_Assist_v.png" alt="Onboarding Assist">
		</div>
		<div class="medium-6 columns parallax slide-element">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_BAM_a.png" alt="BAM" class="rp-visible">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_BAM_b.png" alt="BAM">
		</div>
		<div class="medium-6 columns parallax slide-element">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_SmartSource_a.png" alt="Smart Source" class="rp-visible">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Spotlight_599x598/PA_SmartSource_b.png" alt="Smart Source">
		</div>
	</div>
 </div>
 
 <div class="home-twitter-feed" id="twitterFeed">
	 <div class="text-center parallax slide-element">
		 <i class="fa fa-2x fa-twitter"></i>
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
 
 <div class="home-work-together parallax slide-element">
	 <div class="wt-row">
		 <div class="medium-9 large-7 columns text-center">
			 <h3 class="parallax slide-element">Let's Work Together</h3>
			 <h5 class="parallax slide-element">Let's talk. Better yet, meet. Tell us your pain points. Show us your wish lists. It's likely we've wrestled with challenges similar enough to give us both a running start. Collaboration conquers all.</h5>
		 </div>
	 </div>
	 <div class="wt-row">
		 <div class="medium-6 large-5 columns text-center">
			 <img src="<?php echo get_template_directory_uri(); ?>assets/images/Rocket_icon.svg" alt="New Business" class="parallax grow-element" style="height: 2.25rem">
			 <h4>New Business</h4>
			 <span class="wt-phone">+1(503)347 4700</span>
			 <a href="#">hello@popart.com</a>
		 </div>
		 <div class="medium-6 large-5 columns text-center">
			 <img src="<?php echo get_template_directory_uri(); ?>assets/images/Star_icon.svg" alt="Join Our Team" class="parallax grow-element" style="height: 2rem">
			 <h4>Join Our Team</h4>
			 <span class="wt-phone">+1(503)242 4292</span>
			 <a href="#">career@popart.com</a>
		 </div>
	 </div>
 </div>
 
 <script>
// 	 HERO TEXT FADE IN
	 function heroTextFadeIn() {
		 const heroText = document.querySelector('#heroText h3');
		 heroText.style.opacity = '1';
		 heroText.style.transform = 'translateY(0)';
	 }
	 function heroSubTextFadeIn() {
		 const heroSubText = document.querySelector('#heroText h5');
		 heroSubText.style.opacity = '1';
		 heroSubText.style.transform = 'translateY(0)';
	 }
	 
	 window.setTimeout(heroTextFadeIn, 1000);
	 window.setTimeout(heroSubTextFadeIn, 2000);
	
// 	 PARALLAX

	function debounce(func, wait = 20, immediate = true) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			clearTimeout(timeout);
			timeout = setTimeout(function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			}, wait);
				if (immediate && !timeout) func.apply(context, args);
		};
	};
	
	const sliderElements = document.querySelectorAll('.parallax');
	
	function checkSlide() {
		sliderElements.forEach(sliderElement => {
			const slideInAt = (window.scrollY + window.innerHeight) - (sliderElement.offsetHeight / 3);
			const elementBottom = sliderElement.offsetTop + sliderElement.offsetHeight;
			const isThirdShown = slideInAt > sliderElement.offsetTop;
			const isNotScrolledPast = window.scrollY < elementBottom;
			console.log(slideInAt);
			if (isThirdShown && isNotScrolledPast) {
				sliderElement.classList.add('active');
			} else {
				sliderElement.classList.remove('active');
			}
		});
	}
	
	window.addEventListener('scroll', checkSlide);
		
	$(window).scroll(function() {
	   var hT = $('#twitterFeed').offset().top,
	       hH = $('#twitterFeed').outerHeight(),
	       wH = $(window).height(),
	       wS = $(this).scrollTop();
	   if (wS > (hT+hH-wH)) {
		   $('#homeCTA').fadeOut(750);
	   } else {
		   $('#homeCTA').fadeIn(750);
	   }
	});

// 	 SLIDER
	$(document).ready(function(){
	  $('#twitterSlick').slick({
		  dots: true,
		  autoplay: true,
		  autoplaySpeed: 4500,
		  speed: 1500
	  });
	});
 </script>

 <?php get_footer();
