<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redis_test_theme
 */

?><!-- Footer
============================================= -->
<footer id="footer" class="dark border-0" style="background-color: #080808;">
	<div class="container-fluid px-5">
		<!-- Footer Widgets
		============================================= -->
		<div class="footer-widgets-wrap">

			<div class="row col-mb-50 justify-content-between">
				<div class="col-lg-7">

					<div class="row col-mb-30">
						<div class="col-6 col-lg-3">
							<div class="widget widget_links widget-li-noicon">
								<h4>Hire</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
								</ul>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="widget widget_links widget-li-noicon">
								<h4>Community</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
								</ul>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="widget widget_links widget-li-noicon">
								<h4>Learn</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
								</ul>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="widget widget_links widget-li-noicon">
								<h4>About</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-5 text-center text-lg-end">
					<img src="/demos/car/images/logo-footer.png" alt="Image" height="50">
					<br>
					<div style="color: #444">
						<span>&copy; Canvas Automotive. All Rights Reserved.</span>
						<div class="clear"></div>
						<p style="margin-top: 10px;">Objectively restore standards compliant opportunities whereas one-to-one collaboration and idea-sharing.</p>
					</div>
				</div>
			</div>

		</div><!-- .footer-widgets-wrap end -->
	</div>
</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="uil uil-angle-up"></div>

<!-- Contact Button
============================================= -->
<div id="contact-me" class="bi-envelope side-panel-trigger bg-color"></div>

<!-- JavaScripts
============================================= -->
<script src="/js/plugins.min.js"></script>
<script src="/js/functions.bundle.js"></script>
<script src="/demos/car/js/360rotator.js"></script>

<!-- Bootstrap Select Plugin -->
<script src="/js/components/bs-select.js"></script>

<!-- Bootstrap Switch Plugin -->
<script src="/js/components/bs-switches.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<script>
	//Car Appear In View
	function isScrolledIntoView(elem) {
		var docViewTop = jQuery(window).scrollTop();
		var docViewBottom = docViewTop + jQuery(window).height();

		var elemTop = jQuery(elem).offset().top + 180;
		var elemBottom = elemTop + jQuery(elem).height() - 500;

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}

	jQuery(window).scroll(function() {
		jQuery('.running-car').each(function() {
			if (isScrolledIntoView(this) === true) {
				jQuery(this).addClass('in-view');
			} else {
				jQuery(this).removeClass('in-view');
			}
		});
	});

	//threesixty degree
	window.onload = init;
	var car;

	function init() {

		car = jQuery('.360-car').ThreeSixty({
			totalFrames: 52, // Total no. of image you have for 360 slider
			endFrame: 52, // end frame for the auto spin animation
			currentFrame: 3, // This the start frame for auto spin
			imgList: '.threesixty_images', // selector for image list
			progress: '.spinner', // selector to show the loading progress
			imagePath: 'demos/car/images/360degree-cars/', // path of the image assets
			filePrefix: '', // file prefix if any
			ext: '.png', // extention for the assets
			height: 887,
			width: 500,
			navigation: true,
			responsive: true,
		});
	};

	// Rev Slider
	var revapi424, tpj = jQuery;
	tpj(document).ready(function() {
		if (tpj("#rev_slider_424_1").revolution == undefined) {
			revslider_showDoubleJqueryError("#rev_slider_424_1");
		} else {
			revapi424 = tpj("#rev_slider_424_1").show().revolution({
				sliderType: "carousel",
				jsFileLocation: "include/rs-plugin/js/",
				sliderLayout: "auto",
				dottedOverlay: "none",
				delay: 7000,
				navigation: {
					keyboardNavigation: "off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation: "off",
					mouseScrollReverse: "default",
					onHoverStop: "off",
					touch: {
						touchenabled: "on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
						style: "uranus",
						enable: false,
						hide_onmobile: false,
						hide_onleave: true,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						tmp: '',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: -10,
							v_offset: 0
						},
						right: {
							h_align: "right",
							v_align: "center",
							h_offset: -10,
							v_offset: 0
						}
					},
					carousel: {
						maxRotation: 65,
						vary_rotation: "on",
						minScale: 55,
						vary_scale: "on",
						horizontal_align: "center",
						vertical_align: "center",
						fadeout: "on",
						vary_fade: "on",
						maxVisibleItems: 5,
						infinity: "off",
						space: 0,
						stretch: "on"
					},
					tabs: {
						style: "ares",
						enable: true,
						width: 270,
						height: 80,
						min_width: 270,
						wrapper_padding: 10,
						wrapper_color: "transparent",
						wrapper_opacity: "0.5",
						tmp: '<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
						visibleAmount: 7,
						hide_onmobile: false,
						hide_under: 420,
						hide_onleave: false,
						hide_delay_mobile: 1200,
						hide_delay: 200,
						direction: "horizontal",
						span: true,
						position: "outer-bottom",
						space: 20,
						h_align: "left",
						v_align: "bottom",
						h_offset: 0,
						v_offset: 0
					}
				},
				visibilityLevels: [1240, 1024, 778, 480],
				gridwidth: [1240, 992, 768, 420],
				gridheight: [600, 500, 960, 720],
				lazyType: "single",
				shadow: 0,
				spinner: "off",
				stopLoop: "off",
				stopAfterLoops: 0,
				stopAtSlide: 1,
				shuffle: "off",
				autoHeight: "off",
				hideThumbsOnMobile: "off",
				hideSliderAtLimit: 0,
				hideCaptionAtLimit: 0,
				hideAllCaptionAtLilmit: 0,
				debugMode: false,
				fallbacks: {
					simplifyAll: "off",
					nextSlideOnWindowFocus: "off",
					disableFocusListener: false,
				}
			});
		}
	}); /*ready*/

	// Video on play on hover
	jQuery(document).ready(function($) {
		jQuery('.videoplay-on-hover').hover(function() {
			if (jQuery(this).find('video').length > 0) {
				jQuery(this).find('video').get(0).play();
			}
		}, function() {
			if (jQuery(this).find('video').length > 0) {
				jQuery(this).find('video').get(0).pause();
			}
		});
	});
</script>

<script>
		jQuery(".bt-switch").bootstrapSwitch();
</script>
<?php wp_footer(); ?>

</body>

</html>