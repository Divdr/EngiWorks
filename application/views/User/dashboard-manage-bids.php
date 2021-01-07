<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-manage-candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:05 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php  include_once('topScript.php') ?>

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
				<h3>Manage Bids</h3>
				
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i><?= count($bids) ?> Bids</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<?php
									foreach ($bids as $key) {
								?>
									<li>
										<!-- Overview -->
										<div class="job-listing">

											<!-- Job Listing Details -->
											<div class="job-listing-details">

												

												<!-- Details -->
												<div class="job-listing-description">
													<h3 class="job-listing-title"><a href="<?= site_url('User/Project/loadProjectInfo/'.$key->ProjectID) ?>"><?= $key->Title ?></a> 
														<a href="<?= site_url("User/Project/removeBid/".$key->ProjectBidID)?>"><i class="icon-feather-trash" style="color: #2A43E8;float: right;background-color: lightgray;padding: 5px;border-radius: 50%"></i></a>

													<!-- Job Listing Footer -->
													<div class="job-listing-footer">
														<ul>
															<li><i class="icon-material-outline-date-range"></i> Posted on : <?= $key->CreatedDt ?></li>
															<li><i class="icon-material-outline-person-pin"></i><a href="<?= site_url('User/User/loadUserInfo/'.$key->UserID) ?>">Posted By : <?= $key->Username ?></a></li>
														</ul>
														<ul>
															<li><i class="icon-material-outline-date-range"></i> Amount : <?= $key->BidAmount ?></li>
														</ul>
													</div>
												</div>
											</div>
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


<!-- Send Direct Message Popup
================================================== -->

<!-- Send Direct Message Popup / End -->


<!-- Scripts
================================================== -->
<?php include_once('footerScript.php') ?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-manage-candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:07 GMT -->
</html>