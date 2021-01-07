<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:05 GMT -->
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
				<h3>Reviews</h3>

			</div>
	
			<!-- Row -->
			<div class="row col-md-12">

				<?php
					foreach ($rvData as $key) {
				?>

							<div class="freelancer col-md-4">

									<!-- Overview -->
									<div class="freelancer-overview">
										<div class="freelancer-overview-inner">
											
											<!-- Avatar -->
											<div class="freelancer-avatar">
												<a href="single-freelancer-profile.html">
													<img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $key->ProfilePic ?>" alt="<?= $key->Username ?>" height="100px" width="100px" >
												</a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4>
													<a href="<?= site_url('User/User/loadUserInfo/'.$key->UserID) ?>"><?= $key->Username ?></a>
												</h4>
											</div>

										</div>
									</div>
									
									<div class="freelancer-details" style="margin-top: -40px">
										<div class="star-rating" data-rating="<?= $key->Rating ?>"></div>
									</div>
									<!-- Details -->
									<div class="freelancer-details" style="margin-top: -40px">
										<div class="freelancer-details-list">
											<h4 style="font-size: 1.2em"><i style="color: #2A41E8" class="icon-material-outline-description"></i><?= " ".$key->Review ?></h4>
										</div>
									</div>
								</div>
				<?php
					}
				?>



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

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:05 GMT -->
</html>