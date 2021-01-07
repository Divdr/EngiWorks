<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:05 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once('topScript.php') ?>

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once('topNav.php') ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<?php include_once('dashboard-sidebar.php') ?>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Projects</h3>

			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> My Projects Listings</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<?php
									foreach ($proj as $key) {
								?>
									<li>
										<!-- Job Listing -->
										<div class="job-listing">

											<!-- Job Listing Details -->
											<div class="job-listing-details">

												

												<!-- Details -->
												<div class="job-listing-description">
													<h3 class="job-listing-title"><a href="<?= site_url('User/Project/loadProjectInfo/'.$key->ProjectID) ?>"><?= $key->Title ?></a> 

													<!-- Job Listing Footer -->
													<div class="job-listing-footer">
														<ul>
															<li><i class="icon-material-outline-date-range"></i> Posted on <?= $key->CreatedDt ?></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<!-- Buttons -->
										<div class="buttons-to-right always-visible">
											
											
											<?php
												$val=$this->pm->checkProjectStatus($key->ProjectID);
												if($val) {
											?>

												<a href="<?= site_url('User/Project/loadManageBidder/'.$key->ProjectID) ?>" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates</a>
												
												<a href="<?= site_url('User/Project/removePostedProject/'.$key->ProjectID) ?>" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>

											<?php
												}
											?>
										</div>
									</li>
								<?php
									}
								?>

								

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php include_once('footerScript.php') ?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:05 GMT -->
</html>