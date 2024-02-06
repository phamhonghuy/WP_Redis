<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Redis_test_theme
 */

get_header();
global $wp_object_cache;
try {
    // create redis instance
    //var_dump(wp_cache_supports( 'flush_group' ));
    //var_dump(wp_cache_delete('cars-bmw','cache-cars-filter-info'));
	//var_dump($cache);
	//var_dump($cache->get('cars-bmw'));
	//var_dump($cache->get('cars-bmw,lexus'));
	//var_dump($cache->get('cars-all
	//var_dump($wp_object_cache->flush_group('cache-cars-info'));
    //var_dump( wp_cache_delete_multiple( ['cars-bmw','cars-bmw,lexus'],'cache-cars-info' ));
   //wp_die();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pb-0" style="padding-top: 1px">

				<!-- Masonry Thums
				============================================= -->
				<div class="row m-0 dark" data-height-xs="500" data-height-sm="500" data-height-md="350" data-height-lg="350" data-height-xl="350">
					<a href="demo-car-dealers.html" class="col-md-4 image_fade border-right" style="background: url('demos/car/images/categories/1.jpg') no-repeat center center / cover;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark align-items-end justify-content-start">
								<div class="portfolio-desc py-0">
									<h3>Exteriors Looks</h3>
									<span>McLaren 430L &rarr;</span>
								</div>
							</div>
						</div>
					</a>
					<a href="demos/car/car-accessories.html" class="col-md-4 image_fade p-0 border-right" style="background: url('demos/car/images/categories/2.jpg') no-repeat center center / cover;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark align-items-end justify-content-start">
								<div class="portfolio-desc py-0">
									<h3>Interior Looks</h3>
									<span>Beautiful Dashing Interiors &rarr;</span>
								</div>
							</div>
						</div>
					</a>
					<a href="demos/car/car-contact.html" class="col-md-4 image_fade p-0" style="background: url('demos/car/images/categories/3.jpg') no-repeat center center / cover;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark align-items-end justify-content-start">
								<div class="portfolio-desc py-0">
									<h3>Our Stores</h3>
									<span>Find Out Stores &rarr;</span>
								</div>
							</div>
						</div>
					</a>
				</div>

				<!-- Moving car on scroll
				============================================= -->
				<div class="section mt-0" style="padding: 100px 0">
					<div class="running-car mt-6">
						<img class="car" src="demos/car/images/moving-car/car.jpg" alt="Image">
						<img class="wheel" src="demos/car/images/moving-car/car-tier.png" alt="Image">
					</div>
					<div class="container">
						<div class="row" style="position: relative;">
							<div class="col-lg-6 offset-lg-6">
								<div class="heading-block h-large">
									<h3>Our Fleet<br>Your Fleet</h3>
								</div>
								<p>Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</p>
							</div>
						</div>
					</div>
				</div> <!-- Moving car on scroll End -->

				<!-- Features Section
				============================================= -->
				<div class="container">

					<div class="row mt-5 mb-5">

						<div class="col-lg-4 col-md-6 mt-5 mb-4">

							<div class="heading-block border-bottom-0">
								<h2 class="text-transform-none ls-0" style="font-size: 44px; line-height: 1.2">Explore the New Mercedec Benz</h2>
							</div>
							<span style="color: #BBB;">Eum nihil pretium quas aliqua, laboris ipsam diam congue natoque mollitia occaecati! Cubilia pede, numquam fringilla proident dis? Molestias repellat.<br><br>Quas perferendis urna, officiis necessitatibus deserunt recusandae urna ullamco hac do beatae cubilia iste dolorum, facilisi? Sit, hic, varius! Sollicitudin.<br><br>Nostrum feugiat beatae proident porro eleifend adipiscing nostrud aliquid sit.</span>
							<div class="clear"></div>
							<a href="demo-car-dealers.html" class="button button-rounded button-black button-dark ms-0 mt-4">Know More</a>

						</div>

						<div class="col-lg-4 d-md-none d-lg-block text-center">
							<img src="demos/car/images/features/bg1.png" alt="Car">
						</div>

						<div class="col-lg-4 col-md-6 mt-5 mb-4">
							<div class="feature-box fbox-plain mt-5">
								<div class="fbox-icon">
									<a href="#"><i class="icon-car-battery"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Long Battery Life</h3>
									<p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
								</div>
							</div>

							<div class="feature-box fbox-plain mt-5">
								<div class="fbox-icon">
									<a href="#"><i class="icon-car-cogs2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>24x7 Service</h3>
									<p>Complete control on each &amp; every element that provides endless customization.</p>
								</div>
							</div>

							<div class="feature-box fbox-plain mt-5">
								<div class="fbox-icon">
									<a href="#"><i class="icon-car-pump"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Petrol, Diesel &amp; LPG</h3>
									<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
								</div>
							</div>
						</div>
					</div>

				</div> <!-- Features Area End -->

				<!-- Revolution Slider
				============================================= -->
				<div class="section mb-0" style="background: #FFF url('demos/car/images/revslider/bg.png') center 70% no-repeat; background-size: 100% auto; padding: 100px 0 10px">
					<div class="container">
						<div id="rev_slider_424_1_wrapper" class="rev_slider_wrapper my-0 p-0 fullwidthbanner-container mx-auto" data-alias="image-gallery" style="max-width: 1240px;">
							<!-- START REVOLUTION SLIDER 5.2.0 auto mode -->
							<div id="rev_slider_424_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.0">
								<ul>	<!-- SLIDE  -->
									<!-- SLIDE  -->
									<li data-index="rs-1479" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/1.png"  data-rotate="0"  data-saveperformance="off"  data-title="BMW 3 Series Sedan" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
										<!-- MAIN IMAGE -->
										<img src="include/rs-plugin/demos/assets/images/dummy.png" alt="Image" data-lazyload="demos/car/images/revslider/1.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
											id="slide-1479-layer-1"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['0','0','0','90']"
											data-fontsize="['15','15','13','13']"
											data-lineheight="['15','15','13','13']"
											data-width="['370','370','290','210']"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-start="600"
											data-splitin="none"
											data-splitout="none"
											style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">BMW - 3 Series </div>

										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-primary text-uppercase fw-bold tp-resizeme"
											id="slide-1479-layer-2"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['30','30','92','68']"
											data-fontsize="['40','40','30','20']"
											data-lineheight="['40','40','30','20']"
											data-width="['500','500','400','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">BMW 3 Series Sedan</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-primary text-uppercase tp-resizeme"
											id="slide-1479-layer-3"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
											data-fontsize="['60','60','30','20']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-body ls-0 tp-resizeme"
											id="slide-1479-layer-4"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
											data-fontsize="['14','14','14','13']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

										<!-- LAYER NR. 5 -->
										<div class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
											id="slide-1479-layer-5"
											data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
											data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
										</div>
									</li>
									<!-- SLIDE  -->
									<li data-index="rs-1480" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/2.png"  data-rotate="0"  data-saveperformance="off"  data-title="Audi A4 - White" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
										<!-- MAIN IMAGE -->
										<img src="include/rs-plugin/demos/assets/images/dummy.png"  alt="Image"  data-lazyload="demos/car/images/revslider/2.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
											id="slide-1480-layer-1"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['0','0','0','90']"
											data-fontsize="['15','15','13','13']"
											data-lineheight="['15','15','13','13']"
											data-width="['370','370','290','210']"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-start="600"
											data-splitin="none"
											data-splitout="none"
											style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Audi</div>

										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-primary text-uppercase fw-bold tp-resizeme"
											id="slide-1480-layer-2"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['30','30','92','68']"
											data-fontsize="['40','40','30','20']"
											data-lineheight="['40','40','30','20']"
											data-width="['500','500','400','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Audi A4 - Sedan</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-primary text-uppercase tp-resizeme"
											id="slide-1480-layer-3"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
											data-fontsize="['60','60','30','20']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-body ls-0 tp-resizeme"
											id="slide-1480-layer-4"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
											data-fontsize="['14','14','14','13']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

										<!-- LAYER NR. 5 -->
										<div class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
											id="slide-1480-layer-5"
											data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
											data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
										</div>
									</li>
									<li data-index="rs-1481" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/3.png"  data-rotate="0"  data-saveperformance="off"  data-title="Brand New Mustand" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
										<!-- MAIN IMAGE -->
										<img src="include/rs-plugin/demos/assets/images/dummy.png" alt="Image"  data-lazyload="demos/car/images/revslider/3.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
											id="slide-1481-layer-1"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['0','0','0','90']"
											data-fontsize="['15','15','13','13']"
											data-lineheight="['15','15','13','13']"
											data-width="['370','370','290','210']"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-start="600"
											data-splitin="none"
											data-splitout="none"
											style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Ford Mustang </div>

										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-primary text-uppercase fw-bold tp-resizeme"
											id="slide-1481-layer-2"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['30','30','92','68']"
											data-fontsize="['40','40','30','20']"
											data-lineheight="['40','40','30','20']"
											data-width="['500','500','400','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Brand New Mustang</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-primary text-uppercase tp-resizeme"
											id="slide-1481-layer-3"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
											data-fontsize="['60','60','30','20']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-body ls-0 tp-resizeme"
											id="slide-1481-layer-4"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
											data-fontsize="['14','14','14','13']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

										<!-- LAYER NR. 5 -->
										<div class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
											id="slide-1481-layer-5"
											data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
											data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
										</div>
									</li>
									<!-- SLIDE  -->
									<li data-index="rs-1482" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/4.png"  data-rotate="0"  data-saveperformance="off"  data-title="Audi A3 Cabriolet" data-param1="Convertible" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
										<!-- MAIN IMAGE -->
										<img src="include/rs-plugin/demos/assets/images/dummy.png"  alt="Image"  data-lazyload="demos/car/images/revslider/4.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
											id="slide-1482-layer-1"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['40','40','40','90']"
											data-fontsize="['15','15','13','13']"
											data-lineheight="['15','15','13','13']"
											data-width="['370','370','290','210']"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-start="600"
											data-splitin="none"
											data-splitout="none"
											style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Audi Convertible</div>

										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-primary text-uppercase fw-bold tp-resizeme"
											id="slide-1482-layer-2"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['70','70','92','68']"
											data-fontsize="['40','40','30','20']"
											data-lineheight="['40','40','30','20']"
											data-width="['500','500','400','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Audi A3 cabriolet</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-primary text-uppercase tp-resizeme"
											id="slide-1482-layer-3"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
											data-fontsize="['60','60','30','20']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-body ls-0 tp-resizeme"
											id="slide-1482-layer-4"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
											data-fontsize="['14','14','14','13']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

										<!-- LAYER NR. 5 -->
										<div class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
											id="slide-1482-layer-5"
											data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
											data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
										</div>
									</li>
									<!-- SLIDE  -->
									<li data-index="rs-1483" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/5.png"  data-rotate="0"  data-saveperformance="off"  data-title="Mercedes-Benz E-Class" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
										<!-- MAIN IMAGE -->
										<img src="include/rs-plugin/demos/assets/images/dummy.png"  alt="Image"  data-lazyload="demos/car/images/revslider/5.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
											id="slide-1483-layer-1"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['40','40','40','90']"
											data-fontsize="['15','15','13','13']"
											data-lineheight="['15','15','13','13']"
											data-width="['370','370','290','210']"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-start="600"
											data-splitin="none"
											data-splitout="none"
											style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Mercedes-Benz</div>

										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-primary text-uppercase fw-bold tp-resizeme"
											id="slide-1483-layer-2"
											data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['70','70','92','68']"
											data-fontsize="['40','40','30','20']"
											data-lineheight="['40','40','30','20']"
											data-width="['500','500','400','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['left','left','left','left']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Mercedes-Benz E-Class</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-primary text-uppercase tp-resizeme"
											id="slide-1483-layer-3"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
											data-fontsize="['60','60','30','20']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption font-body ls-0 tp-resizeme"
											id="slide-1483-layer-4"
											data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
											data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
											data-fontsize="['14','14','14','13']"
											data-lineheight="['23','23','21','20']"
											data-width="['360','360','290','210']"
											data-height="none"
											data-whitespace="normal"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

										<!-- LAYER NR. 5 -->
										<div class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
											id="slide-1483-layer-5"
											data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
											data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-type="text"
											data-actions=''
											data-basealign="slide"
											data-responsive_offset="on"
											data-textAlign="['right','right','right','right']"
											data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
											data-splitin="none"
											data-splitout="none"
											style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
										</div>
									</li>
								</ul>
								<div class="tp-bannertimer d-none"></div>
							</div>
						</div><!-- END REVOLUTION SLIDER -->
					</div>
				</div>

				<!-- 360 degree car
				============================================= -->
				<div class="section dark mb-0" style="background: #FFF url('demos/car/images/1.jpg') right bottom no-repeat; background-size: cover; padding: 80px 0 40px">
					<div class="container-fluid" style="position: relative; z-index: 2;">
						<div class="row">
							<div class="col-lg-8">
								<div class="heading-block border-0 mb-0 text-center">
									<h3 style="font-size: 32px;  font-weight: 700;">360 Degree Drag</h3>
								</div>
								<!-- 360 degree Car Content -->
								<div class="threesixty 360-car">
									<div class="spinner">
										<span>0%</span>
									</div>
									<ol class="threesixty_images"></ol>
								</div>

							</div>
							<div class="col-lg-4">
								<div class="row">
									<div class="col-lg-10">
										<div class="heading-block mt-4 border-0">
											<h3 style="text-transform: none; font-size: 36px; letter-spacing: 0px; font-weight: 700;">Select other Models</h3>
											<span>Intrinsicly formulate plug-and-play systems with interactive communities. Quickly aggregate plug-and-play.</span>
										</div>
										<form id="login-form" name="login-form" class="row mb-0" action="#" method="post">

											<div class="col-12 form-group">
												<select class="selectpicker w-100 customjs" title="Select Brand" data-live-search="true" data-size="6">
													<option value="AUDI">Audi</option>
													<option value="BMW All Series">BMW All Series</option>
													<option value="HONDA">Honda</option>
													<option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
													<option value="HONDA">Manza</option>
													<option value="MERCEDES-BENZ">Huyndai</option>
												</select>
											</div>

											<div class="col-12 form-group">
												<select class="selectpicker w-100 customjs" data-size="6" data-live-search="true" title="Select Model" style="line-height: 30px;">
													<optgroup label="AUDI">
														<option value="R8">Audi R8</option>
														<option value="TT">Audi TT</option>
														<option value="S5">Audi S5</option>
														<option value="A5">Audi A5</option>
														<option value="TTS">Audi TTS</option>
														<option value="RS5">Audi RS 5</option>
													</optgroup>
													<optgroup label="BMW All Series">
														<option value="1-Series">BMW 1 Series 5-Door</option>
														<option value="Series-ActiveE">BMW 1 Series ActiveE</option>
														<option value="3-Series-Sedan">BMW 3 Series Sedan</option>
														<option value="ActiveHybrid-3">BMW ActiveHybrid 3</option>
														<option value="5-Series-Sedan">BMW 5 Series Sedan</option>
														<option value="ActiveHybrid-5">BMW ActiveHybrid 5</option>
														<option value="7-Series">BMW 7 Series</option>
														<option value="ActiveHybrid-7">BMW ActiveHybrid 7</option>
														<option value="M3-Sedan">BMW M3 Sedan</option>
														<option value="M5-Sedan">BMW M5 Sedan</option>
														<option value="3-Series-Turismo">BMW 3 Series Gran Turismo</option>
														<option value="5=Series-Turismo">BMW 5 Series Gran Turismo</option>
													</optgroup>
													<optgroup label="HONDA">
														<option value="Fit">Honda Fit</option>
														<option value="City">Honda City</option>
														<option value="Civic">Honda Civic</option>
														<option value="Fit-EV1">Honda Fit EV1</option>
														<option value="Accord">Honda Accord</option>
														<option value="Crosstour">Honda Crosstour</option>
														<option value="FCX-Clarity">Honda FCX Clarity</option>
														<option value="Civic-Hybrid">Honda Civic Hybrid</option>
														<option value="Accord-Hybrid">Honda Accord Hybrid</option>
														<option value="Accord-Plug-In">Honda Accord Plug-In</option>
													</optgroup>
													<optgroup label="MERCEDES-BENZ">
														<option value="S-Class">2021 Mercedes-Benz S-Class Sedan</option>
														<option value="C-Class">2021 Mercedes-Benz C-Class Sedan</option>
														<option value="E-Class">2021 Mercedes-Benz E-Class Sedan</option>
														<option value="E-Class-Hybrid">2021 Mercedes-Benz E-Class Hybrid</option>
														<option value="Maybach-S600">2021 Mercedes-Benz Maybach S600</option>
														<option value="B-Class-Electric-Drive">2021 Mercedes-Benz B-Class Electric Drive</option>
													</optgroup>
												</select>
											</div>

											<div class="col-12 form-group">
												<button class="button button-rounded w-100 fw-normal m-0" id="login-form-submit" name="login-form-submit" value="login">Search</button>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="video-wrap d-block d-md-block d-lg-none" style="z-index: 0;">
						<div class="video-overlay" style="background: rgba(255,255,255,0.8);"></div>
					</div>
				</div> <!-- 360 Degree Section End -->

				<!-- 360 degree car
				============================================= -->
				<div class="section m-0 bg-transparent" style="padding: 100px 0;">
					<div class="container">
						<div class="heading-block text-center">
							<div class="before-heading text-uppercase ls-1" style="font-size: 13px; font-style: normal;">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
							<h3 class="fw-bold">Featured Vehicles</h3>
						</div>

						<!-- Grid Filter
						============================================= -->
						<ul class="grid-filter style-2 w-100" data-container="#portfolio">
							<li><a href="#" data-filter=".cf-cuv"><i class="icon-car-cuv"></i><span>Cuv</span></a></li>
							<li><a href="#" data-filter=".cf-sedan"><i class="icon-car-sedan"></i><span>Sedan</span></a></li>
							<li><a href="#" data-filter=".cf-supercar"><i class="icon-car-supercar"></i><span>Supercar</span></a></li>
							<li><a href="#" data-filter=".cf-hatchback"><i class="icon-car-hatchback"></i><span>Hatchback</span></a></li>
							<li><a href="#" data-filter=".cf-cabriolet"><i class="icon-car-cabriolet"></i><span>Cabriolet</span></a></li>
							<!-- Show All Button -->
							<li class="activeFilter ms-auto"><a class="button button-small button-rounded button-reset" href="#" data-filter="*">Show All</a></li>
						</ul><!-- .grid-filter end -->

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio row grid-container gutter-20 col-mb-30" data-layout="fitRows">

							<!-- Car 1 -->
							<article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-sedan">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="demo-car-dealers.html">
											<img src="demos/car/images/filter-cars/1.jpg" alt="Open Imagination">
											<div class="filter-p-pricing">
												<span class="p-price fw-bold ls-1">$32,568</span>
												<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
											</div>
										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="demo-car-dealers.html">Ford Mustang - White</a></h3>
										<span>Dramatically synthesize parallel applications vis-a-vis revolutionary e-tailers. Monotonectally incubate cooperative partnerships.</span>
									</div>
									<div class="row g-0 car-p-features font-primary">
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
									</div>
								</div>
							</article>

							<!-- Car 2 -->
							<article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-suv">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="demo-car-dealers.html">
											<img src="demos/car/images/filter-cars/2.jpg" alt="Open Imagination">
											<div class="filter-p-pricing">
												<span class="p-price fw-bold ls-1">$32,568</span>
												<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
											</div>
										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="demo-car-dealers.html">Chevrolet Brown Traverse</a></h3>
										<span>Enthusiastically incubate turnkey technologies for exceptional materials. Seamlessly implement emerging scenarios.</span>
									</div>
									<div class="row g-0 car-p-features font-primary">
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-50 mph</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 7 Seater</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-paint"></i><span> Brown</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Manual</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 20-Inch</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
									</div>
								</div>
							</article>

							<!-- Car 3 -->
							<article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-cabriolet">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="demo-car-dealers.html">
											<img src="demos/car/images/filter-cars/3.jpg" alt="Open Imagination">
											<div class="filter-p-pricing">
												<span class="p-price fw-bold ls-1">$62,300</span>
												<span class="p-price-msrp">MSRP : <strong>$62,700</strong></span>
											</div>
										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="demo-car-dealers.html">Audi 2021 S5 Cabriolet</a></h3>
										<span>Competently evolve intuitive synergy without corporate human capital. Monotonectally.</span>
									</div>
									<div class="row g-0 car-p-features font-primary">
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-60 mph</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-bearing"></i><span> Six-cylinder</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 23 mpg8</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
									</div>
								</div>
							</article>

							<!-- Car 4 -->
							<article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-cuv">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="demo-car-dealers.html">
											<img src="demos/car/images/filter-cars/4.jpg" alt="Open Imagination">
											<div class="filter-p-pricing">
												<span class="p-price fw-bold ls-1">$32,568</span>
												<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
											</div>
										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="demo-car-dealers.html">BMW 3 Series, ABS</a></h3>
										<span>Energistically engineer user friendly synergy vis-a-vis enabled channels. Rapidiously utilize value-added. Laudantium debitis perferendis obcaecati.</span>
									</div>
									<div class="row g-0 car-p-features font-primary">
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-80 mph</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> Hybrid</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-stearing"></i><span> 3000</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
									</div>
								</div>
							</article>

							<!-- Car 5 -->
							<article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-supercar">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="demo-car-dealers.html">
											<img src="demos/car/images/filter-cars/5.jpg" alt="Open Imagination">
											<div class="filter-p-pricing">
												<span class="p-price fw-bold ls-1">$32,568</span>
												<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
											</div>
										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="demo-car-dealers.html">2021 LEXUS IS 200T FSPORT</a></h3>
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium debitis unde laboriosam perferendis obcaecati.</span>
									</div>
									<div class="row g-0 car-p-features font-primary">
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-cog3"></i><span> 30,000 mi</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-paint"></i><span> Metalic</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel"></i><span> 11 kmpl</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 18 Inch</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
									</div>
								</div>
							</article>

							<!-- Car 6 -->
							<article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-hatchback">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="demo-car-dealers.html">
											<img src="demos/car/images/filter-cars/6.jpg" alt="Open Imagination">
											<div class="filter-p-pricing">
												<span class="p-price fw-bold ls-1">$32,568</span>
												<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
											</div>
										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="demo-car-dealers.html">Chevrolet T430 Hatchback</a></h3>
										<span>Appropriately exploit strategic niche markets rather than optimal products. Enthusiastically negotiate perferendis the art methods of empowermen.</span>
									</div>
									<div class="row g-0 car-p-features font-primary">
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
										<div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
									</div>
								</div>
							</article>

						</div>

					</div>
				</div> <!-- Filter Car lists end -->

				<!-- Video Gallery on Hover
				============================================= -->
				<div class="section m-0 overflow-hidden">
					<div class="heading-block mb-0 text-center">
						<h2>Video Gallery</h2>
					</div>
				</div>
				<div class="dark section p-0 m-0 overflow-hidden" style="height: 740px">
					<div class="row h-100 align-items-stretch">
						<!-- Video 1 -->
						<div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
							<a href="demo-car-listing.html">
								<div class="vertical-middle text-center">
									<div class="before-heading text-uppercase ls-1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
									<h2 class="mb-0 ls-1">Mercedes-AMG GT</h2>
								</div>
								<div class="video-wrap no-placeholder">
									<video id="slide-video-1" poster="demos/car/images/videos/1.jpg" preload="auto" loop muted playsinline>
										<source src='demos/car/images/videos/1.mp4' type='video/mp4'>
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
								</div>
							</a>
						</div>
						<!-- Video 2 -->
						<div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
							<a href="demo-car-listing.html">
								<div class="vertical-middle text-center">
									<div class="before-heading text-uppercase ls-1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
									<h2 class="mb-0 ls-1">Mercedes-AMG C 63</h2>
								</div>
								<div class="video-wrap no-placeholder">
									<video id="slide-video-2" poster="demos/car/images/videos/2.jpg" preload="auto" loop muted playsinline>
										<source src='demos/car/images/videos/2.mp4' type='video/mp4'>
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
								</div>
							</a>
						</div>
						<!-- Video 3 -->
						<div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
							<a href="demo-car-listing.html">
								<div class="vertical-middle text-center">
									<div class="before-heading text-uppercase ls-1" style="font-size: 14px; font-style: normal; color: #EEE">BMW Auto</div>
									<h2 class="mb-0 ls-1">BMW Z4 Roadster</h2>
								</div>
								<div class="video-wrap no-placeholder">
									<video id="slide-video-3" poster="demos/car/images/videos/3.jpg" preload="auto" loop muted playsinline>
										<source src='demos/car/images/videos/3.mp4' type='video/mp4'>
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
								</div>
							</a>
						</div>
						<!-- Video 4 -->
						<div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
							<a href="demo-car-listing.html">
								<div class="vertical-middle text-center">
									<div class="before-heading text-uppercase ls-1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes Benz</div>
									<h2 class="mb-0 ls-1">Mercedes-COUPÉ GLE 63</h2>
								</div>
								<div class="video-wrap no-placeholder">
									<video id="slide-video-4" poster="demos/car/images/videos/4.jpg" preload="auto" loop muted playsinline>
										<source src='demos/car/images/videos/4.mp4' type='video/mp4'>
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
								</div>
							</a>
						</div>
					</div>
				</div> <!-- Video Gallery end -->

				<!-- Counter Area
				============================================= -->
				<div class="section counter-section m-0 dark">
					<div class="container align-items-stretch">
						<div class="row">
							<div class="col-lg-3 col-md-6 text-center">
								<div>
									<i class="i-plain i-large mx-auto color icon-car-fulltime"></i>
									<div class="counter"><span data-from="10" data-to="11365" data-refresh-interval="50" data-speed="1000"></span></div>
									<h5>Happy Customers</h5>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 text-center">
								<div>
									<i class="i-plain i-large mx-auto color icon-car-money"></i>
									<div class="counter"><span data-from="10" data-to="145" data-refresh-interval="50" data-speed="700"></span></div>
									<h5>Cars in Stock</h5>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 text-center">
								<div>
									<i class="i-plain i-large mx-auto color icon-car-fan"></i>
									<div class="counter"><span data-from="10" data-to="50" data-refresh-interval="85" data-speed="1200"></span></div>
									<h5>Showrooms</h5>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 text-center">
								<div>
									<i class="i-plain i-large mx-auto color icon-car-fuel2"></i>
									<div class="counter"><span data-from="10" data-to="7664" data-refresh-interval="30" data-speed="900"></span></div>
									<h5>Awwards</h5>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Counter Area end -->

				<!-- Featured Section
				============================================= -->
				<div class="section m-0" style="background: #FFF url('demos/car/images/features/section-bg.jpg') left bottom no-repeat; background-size: cover; padding: 140px 0">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-9">
								<div class="heading-block">
									<h3 style="font-size: 58px; line-height: 56px; letter-spacing: -2px">Our Fleet<br>Your Fleet</h3>
								</div>
								<p>Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</p>

								<div class="row mt-5">
									<div class="col-md-6">
										<div class="feature-box fbox-plain media-box">
											<div class="fbox-icon" style="position: relative;">
												<a href="#"><i class="icon-car-service2"></i></a>
											</div>
											<div class="fbox-content" style="margin-top: 25px">
												<h3>Skilled Professionals.</h3>
												<p class="fw-light" style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="feature-box fbox-plain media-box">
											<div class="fbox-icon" style="position: relative;">
												<a href="#"><i class="icon-car-crane"></i></a>
											</div>
											<div class="fbox-content" style="margin-top: 25px">
												<h3>Skilled Professionals.</h3>
												<p class="fw-light" style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div> <!-- Featured end -->

				<!-- Buy And Sell Section
				============================================= -->
				<div class="section m-0 p-0">
					<div class="row align-items-stretch">
						<!-- Half Section 1 -->
						<div class="col-lg-6 dark bg-color" style="background: url('demos/car/images/5.jpg') center center no-repeat; background-size: cover;">
							<div class="col-padding">
								<i class="i-plain i-xlarge icon-car-service inline-block" style="margin-bottom: 20px;"></i>
								<div class="heading-block border-0" style="margin-bottom: 20px;">
									<h3>Are You Looking for a New Car?</h3>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus. Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
								<a href="#" class="button button-rounded button-white button-light m-0">Know More</a>
							</div>
						</div>
						<!-- Half Section 2 -->
						<div class="col-lg-6 bg-color" style="background: url('demos/car/images/6.jpg') center center no-repeat; background-size: cover;">
							<div class="col-padding">
								<i class="i-plain i-xlarge icon-car-care inline-block" style="margin-bottom: 20px;"></i>
								<div class="heading-block border-0" style="margin-bottom: 20px;">
									<h3>Want to sell a used car?</h3>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus. Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
								<a href="#" class="button button-large button-dark button-black button-rounded m-0">Know More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Before Footer Section
				============================================= -->
				<div class="section m-0" style="background: #FFF url('demos/car/images/footer-bg.jpg') center bottom no-repeat; background-size: cover; height: 770px">
					<div class="mx-auto dark center" style="max-width: 570px">
						<div class="heading-block dark mb-4 border-0">
							<h2 class="text-transform-none fw-medium">Raise Your Heart</h2>
							<p style="color: #DDD; margin-top: 10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ipsa necessitatibus rem facere perspiciatis neque laborum est, illum commodi sunt, nobis voluptas.</p>
						</div>
						<a href="demos/car/car-contact.html" class="text-uppercase fw-bold ls-2 text-white" style="font-size: 12px; border-bottom: 1px solid #FFF">Request a Quote</a> &rarr;
					</div>
				</div>
			</div>
		</section><!-- #content end -->

<?php
get_sidebar();
get_footer();
