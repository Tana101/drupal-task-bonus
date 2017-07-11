<?php

/**
 * @file
 * Geek Label's theme implementation to display a single Drupal page.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site.
 * - .nav: for full site menu
 * - .mobile-nav: for mobile site menu (responsive version)
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['banner']: Items for the banner content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['messages']: Dynamic message text, produced by results of admin actions.
 * - $page['next_event']: Items for the next_event content region.
 * - $page['content']: The main content of the current page.
 * - $page['sub_footer']: Items for the sub_footer content region (blog carousel).
 * - $page['footer']: Items for the footer region.
 *
 */
?>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ06nFqjdgjf-ARTSCr-XENfRuQJthm8I&callback=initMap"></script>

<div id="page-wrapper"><div id="page">

	<?php if ($page['help']): ?>
		<div class="container-fluid white-block">
			<div class="row">
				<div class="container">
					<!-- help content -->
					<?php print render($page['help']); ?>
				</div>
			</div>
		</div> <!-- /#help -->
	<?php endif; ?>


	<div id="header_section">
		<div class="container-fluid red-block">
			<div class="row vertical-center">
				<div class="container">

					<div class="content-block">
						<div class="col-xs-12 logo">

							<?php if ($logo): ?>
								<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
									<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
								</a> <!-- /#logo -->
							<?php endif; ?>

						</div>
						<div class="col-xs-12">
							A team of self confessed geeks who are all about great digital design
						</div>
					</div>
					
					<a class="content-scroll-btn" href="#infographic_problem">
						<span class="gl-full-red-round-btn">
							<span class="circle-shadow"></span>
							<span class="inner-circle">
								<span class="bottom-block-arrow"></span>
							</span>
						</span>
					</a>

				</div>
			</div>
		</div>
	</div> <!-- /#header_section -->


	<div id="infographics_section">
		<div id="infographic_problem" class="container-fluid light-gray-block">
			<div class="row vertical-center">
				<div class="container">

					<div class="col-xs-12">
						<img src="sites/all/themes/geek_label/images/infographic-problem.png" alt="Infographic Problem">
					</div>
					<div class="col-xs-12">
						Some agencies love <span class="highlight-red">design</span>, but don’t know how to build
					</div>
					
					<a class="content-scroll-btn" href="#infographic_clueless">
						<span class="gl-full-red-round-btn">
							<span class="circle-shadow"></span>
							<span class="inner-circle">
								<span class="bottom-block-arrow"></span>
							</span>
						</span>
					</a>

				</div>
			</div>
		</div> <!-- /infographic problem block -->


		<div id="infographic_clueless" class="container-fluid light-gray-block">
			<div class="row vertical-center">
				<div class="container">

					<div class="col-xs-12">
						<img src="sites/all/themes/geek_label/images/infographic-clueless.png" alt="Infographic Clueless">
					</div>
					<div class="col-xs-12">
						Some agencies know how to <span class="highlight-red">build</span> but can’t do design
					</div>
					
					<a class="content-scroll-btn" href="#infographic_solved">
						<span class="gl-full-red-round-btn">
							<span class="circle-shadow"></span>
							<span class="inner-circle">
								<span class="bottom-block-arrow"></span>
							</span>
						</span>
					</a>

				</div>
			</div>
		</div> <!-- /infographic clueless block -->


		<div id="infographic_solved" class="container-fluid light-gray-block">
			<div class="row vertical-center">
				<div class="container">

					<div class="col-xs-12">
						<img src="sites/all/themes/geek_label/images/infographic-solved.png" alt="Infographic Solved">
					</div>
					<div class="col-xs-12">
						We love <span class="highlight-red">both</span>
					</div>
					
					<a class="content-scroll-btn" href="#services_section">
						<span class="gl-full-red-round-btn">
							<span class="circle-shadow"></span>
							<span class="inner-circle">
								<span class="bottom-block-arrow"></span>
							</span>
						</span>
					</a>

				</div>
			</div>
		</div> <!-- /infographic solved block -->
	</div> <!-- /#infographics_section -->


	<div id="services_section">
		<div class="container-fluid white-block">
			<div class="row vertical-center">
				<div class="container">
					
					<h1>Services</h1>

					<div class="row inner-container">
						<div class="col-xs-12 col-sm-6 col-lg-3 padding-block">
							<div class="col-xs-5 col-sm-12">
								<div class="icon">
									<img src="sites/all/themes/geek_label/images/red-dev-icon.png" alt="Web Development Icon">
								</div>
							</div>
							<div class="col-xs-7 col-sm-12">
								<div class="icon-label">
									Web Development
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3 padding-block">
							<div class="col-xs-5 col-sm-12">
								<div class="icon">
									<img src="sites/all/themes/geek_label/images/red-design-icon.png" alt="Design Icon">
								</div>
							</div>
							<div class="col-xs-7 col-sm-12">
								<div class="icon-label">
									Design
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3 padding-block">
							<div class="col-xs-5 col-sm-12">
								<div class="icon">
									<img src="sites/all/themes/geek_label/images/red-branding-icon.png" alt="Branding Icon">
								</div>
							</div>
							<div class="col-xs-7 col-sm-12">
								<div class="icon-label">
									Branding
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3 padding-block">
							<div class="col-xs-5 col-sm-12">
								<div class="icon">
									<img src="sites/all/themes/geek_label/images/red-ux-icon.png" alt="UX Research Icon">
								</div>
							</div>
							<div class="col-xs-7 col-sm-12">
								<div class="icon-label">
									UX Research
								</div>
							</div>
						</div>
					</div>
					
					<a class="content-scroll-btn" href="#clients_section">
						<span class="gl-hollow-dark-round-btn">
							<span class="inner-circle">
								<span class="bottom-block-arrow"></span>
							</span>
						</span>
					</a>

				</div>
			</div>
		</div>
	</div> <!-- /#services_section -->


	<div id="clients_section">
		<div class="container-fluid light-gray-block">
			<div class="row vertical-center">
				<div class="container">
					
					<h1>Clients</h1>

					<!-- hide for small + medium, show for large  -->
					<div class="hidden-xs hidden-sm hidden-md">
						<div class="arrow-container">
							<!-- place arrows here -->
							<a href="javascript:void(0)"><span class="left-carousel-arrow"></span></a>
							<a href="javascript:void(0)"><span class="right-carousel-arrow"></span></a>
						</div>
					</div>

					<div class="row inner-container">
						<div class="col-xs-12 col-lg-4 client-img-block">
							<img src="sites/all/themes/geek_label/images/tpg-logo.png" alt="The Photographers Gallery Logo">
						</div>
						<div class="col-xs-12 col-lg-4 client-img-block hidden-xs hidden-sm hidden-md">
							<img src="sites/all/themes/geek_label/images/tvs-logo.png" alt="The Vegan Society Logo">
						</div>
						<div class="col-xs-12 col-lg-4 client-img-block hidden-xs hidden-sm hidden-md">
							<img src="sites/all/themes/geek_label/images/pshe-logo.png" alt="PSHE Association Logo">
						</div>
					</div>

					<!-- hide for large, show for small + medium -->
					<div class="hidden-lg">
						<div class="dot-carousel-block">
							<input id="carousel-item-1" type="radio" name="carousel-dots" checked>
							<label for="carousel-item-1">Go to item 1</label>

							<input id="carousel-item-2" type="radio" name="carousel-dots">
							<label for="carousel-item-2">Go to item 2</label>

							<input id="carousel-item-3" type="radio" name="carousel-dots"> 
							<label for="carousel-item-3">Go to item 3</label>
						</div>
					</div>

					<a class="content-scroll-btn" href="#location_section">
						<span class="gl-hollow-dark-round-btn">
							<span class="inner-circle">
								<span class="bottom-block-arrow"></span>
							</span>
						</span>
					</a>

				</div>
			</div>
		</div>
	</div> <!-- /#clients_section -->


	<div id="location_section">
		<div class="container-fluid light-gray-block">
			<div>

				<!-- hide for small, show for medium + large  -->
				<span class="hidden-xs hidden-sm"><h1>How to find us</h1></span>

				<!-- hide for medium + large, show for small -->
				<span class="hidden-md hidden-lg"><h1>Find us</h1></span>

				<div class="map-wrapper">
					<div id="map"></div>
					<div class="map-shadow-top"></div>
					<div class="map-shadow-bottom"></div>
				</div>
				
				<a class="content-scroll-btn" href="#contact_section">
					<span class="gl-full-red-round-btn">
						<span class="circle-shadow"></span>
						<span class="inner-circle">
							<span class="bottom-block-arrow"></span>
						</span>
					</span>
				</a>

			</div>
		</div>
	</div> <!-- /#location_section -->


	<div id="contact_section">
		<div class="container-fluid light-gray-block">
			<div class="row vertical-center">
				<div class="container">
					
					<h1>Contact</h1>

					<div class="row form-container">

						<form action="/">
							<div class="form-group">
								<input id="form_name" class="form-control" name="user_name" type="text" placeholder="Name">
							</div>
							<div class="form-group">
								<input id="form_email" class="form-control" name="user_email" type="email" placeholder="Email">
							</div>
							<div class="form-group">
								<textarea id="form_message" class="form-control" name="user_message" rows="5" placeholder="Message"></textarea>
							</div>
							<button type="submit" class="btn btn-block contact-btn">Send Message!</button>
						</form>

						<div class="contact-details">
							<!-- hide for small, show for medium + large  -->
							<div class="hidden-xs hidden-sm">Or phone on: 01923 220121</div>

							<!-- hide for medium + large, show for small -->
							<div class="hidden-md hidden-lg">
								<div>
									<span class="glyphicon glyphicon-earphone contact-icon"></span>01923 220121
								</div>
								<div>
									<span class="glyphicon glyphicon-envelope contact-icon"></span>info@compucorp.co.uk
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</div>
	</div> <!-- /#contact_section -->


</div></div> <!-- /#page, /#page-wrapper -->
