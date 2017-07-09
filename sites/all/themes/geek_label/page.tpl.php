<?php

/**
 * @file
 * Open Charity's theme implementation to display a single Drupal page.
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
<div id="page-wrapper"><div id="page">

	<?php if ($messages): ?>
		<div id="messages">
			<div class="section clearfix">
				<?php print $messages; ?>
			</div>
		</div> <!-- /#messages -->
	<?php endif; ?>


	<div id="header_section">
		<div class="container-fluid red-block">
			<div class="row">
				<div class="container">
					<div class="col-xs-12">

						<?php if ($logo): ?>
							<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
								<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
							</a> <!-- /#logo -->
						<?php endif; ?>

					</div>
					<div class="col-xs-12">
						A team of self confessed geeks who are all about great digital design
					</div>
					<div class="col-xs-12">
						bottom arrow
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /#header_section -->


	<div id="infographics_section">
		<div class="container-fluid light-gray-block">
			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<img src="sites/all/themes/geek_label/images/infographic-problem.png" alt="Infographic Problem">
					</div>
					<div class="col-xs-12">
						Some agencies love <span class="highlight-red">design</span>, but don’t know how to build
					</div>
					<div class="col-xs-12">
						bottom arrow
					</div>
				</div>
			</div>
		</div> <!-- /infographic problem block -->

		<div class="container-fluid light-gray-block">
			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<img src="sites/all/themes/geek_label/images/infographic-clueless.png" alt="Infographic Clueless">
					</div>
					<div class="col-xs-12">
						Some agencies know how to <span class="highlight-red">build</span> but can’t do design
					</div>
					<div class="col-xs-12">
						bottom arrow
					</div>
				</div>
			</div>
		</div> <!-- /infographic clueless block -->

		<div class="container-fluid light-gray-block">
			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<img src="sites/all/themes/geek_label/images/infographic-solved.png" alt="Infographic Solved">
					</div>
					<div class="col-xs-12">
						We love <span class="highlight-red">both</span>
					</div>
					<div class="col-xs-12">
						bottom arrow
					</div>
				</div>
			</div>
		</div> <!-- /infographic solved block -->
	</div> <!-- /#infographics_section -->


	<div id="services_section">
		<div class="container-fluid white-block">
			<div class="row">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="icon">
								<img src="sites/all/themes/geek_label/images/red-dev-icon.png" alt="Web Development Icon">
							</div>
							<div class="label">
								Web Development
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="icon">
								<img src="sites/all/themes/geek_label/images/red-design-icon.png" alt="Design Icon">
							</div>
							<div class="label">
								Design
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="icon">
								<img src="sites/all/themes/geek_label/images/red-branding-icon.png" alt="Branding Icon">
							</div>
							<div class="label">
								Branding
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="icon">
								<img src="sites/all/themes/geek_label/images/red-ux-icon.png" alt="UX Research Icon">
							</div>
							<div class="label">
								UX Research
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							bottom arrow
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /#services_section -->


	<?php //if ($page['sub_footer']): ?>
		<div id="sub_footer">
			<div class="light-gray-block"></div>

			<div class="white-block">
				<!-- sub_footer content -->
				<?php //print render($page['sub_footer']); ?>
			</div>
		</div> <!-- /#sub_footer -->
	<?php //endif; ?>

</div></div> <!-- /#page, /#page-wrapper -->
