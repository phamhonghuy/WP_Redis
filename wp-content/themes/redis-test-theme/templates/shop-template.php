<?php
/* Template Name: Shop Template */
get_header();
$handle = Redis_Theme_Handler::get_instance();
$brands_array = $handle->get_all_brands();

if (isset($_GET['brand'])) {
    $brands_get = $_GET['brand'];
    //echo '<pre>'; var_dump($brands_get); die('---DEBUG HERE---');
    $brands_sel = wc_string_to_array($brands_get);

} else {
    $brands_sel = [];
}
$cars = $handle->get_cars($brands_sel);
?>
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pt-0" style="overflow: visible;">
				<div class="container">

					<div class="card p-4 shadow" style="top: -60px;">
						<form action="#" method="get" class="mb-0">
							<div class="row">
								<div class="col-md-2 col-sm-12">
									<label class="d-block">Type</label>
									<input class="bt-switch" type="checkbox" checked data-on-text="New" data-off-text="Used" data-on-color="themecolor" data-off-color="themecolor">
								</div>
								<div class="col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
									<label>All Brands</label>
									<select class="selectpicker customjs" name='brand[]' title="Select Brand"  data-size="10" data-live-search="true" multiple data-live-search="true" style="width:100%;">
										<optgroup label="All Brands">
											<?php
                                            foreach ($brands_array as $brand){
                                                $selected = in_array( $brand->slug, $brands_sel) ? 'selected' : '';
                                                echo "<option value='$brand->slug' $selected>$brand->name</option>";
                                            }
                                            ?>
										</optgroup>
									</select>
								</div>
								<div class="col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
									<label>Select Model</label>
									<select class="selectpicker customjs" data-size="10" data-live-search="true" title="Select Model" style="width:100%; line-height: 30px;">
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
										<optgroup label="Ferrari">
											<option value="Ferrari Daytona">Ferrari Daytona</option>
											<option value="Ferrari 250 GTO">Ferrari 250 GTO</option>
											<option value="Ferrari 275">Ferrari 275</option>
											<option value="Ferrari 599 GTB Fiorano">Ferrari 599 GTB Fiorano</option>
											<option value="Ferrari F430">Ferrari F430</option>
											<option value="Ferrari 250">Ferrari 250</option>
										</optgroup>
										<optgroup label="Porsche">
											<option value="Porsche Carrera GT">Porsche Carrera GT</option>
											<option value="Porsche Boxster">Porsche Boxster</option>
											<option value="Porsche 911 classic">Porsche 911 classic</option>
											<option value="Porsche 911">Porsche 911</option>
											<option value="Porsche Cayman">Porsche Cayman</option>
											<option value="Porsche Panamera">Porsche Panamera</option>
											<option value="Porsche 959">Porsche 959</option>
											<option value="Porsche 356">Porsche 356</option>
											<option value="Porsche Cayenne">Porsche Cayenne</option>
											<option value="Porsche 997">Porsche 997</option>
										</optgroup>
									</select>
								</div>
								<div class="col-md-2 col-sm-6 col-6">
									<button class="button button-3d button-rounded w-100 ms-0" style="margin-top: 29px;">Search</button>
								</div>
							</div>
						</form>
					</div>

				</div>

				<div class="section m-0 pt-0 bg-transparent">
					<div class="container">

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
						<div id="portfolio" class="portfolio row gutter-30 grid-container" data-layout="fitRows">

							<!-- Car  -->

                            <?php
                            if ($cars){
                                foreach ($cars as $car){
                                    get_template_part('template-parts/content', 'car-card',$car);
                                }
                            }
                            ?>
                            

						</div>
					</div>
				</div>

				<div class="section text-center nbottomomargin mt-3 footer-stick" style="padding:80px 0 ">
					<div class="container">
						<h3 class="font-primary">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
						<a href="contact.html" class="button button-color button-large button-rounded">Contact Now</a>
					</div>
				</div>
			</div>
		</section><!-- #content end -->
<?php
get_footer();