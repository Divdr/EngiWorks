<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/freelancers-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:45:56 GMT -->
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

<!-- Page Content
================================================== -->
<div class="full-page-container">

	
	
	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">

			<!-- Freelancers List Container -->
			<div class="freelancers-container freelancers-grid-layout margin-top-35">
				
				<?php
					foreach ($eng as $key) {
						if($key->UserID!=$_SESSION['UID']){
				?>

						<!--Freelancer -->
						<div class="freelancer">

							<!-- Overview -->
							<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
									
									<!-- Avatar -->
									<div class="freelancer-avatar">
										<a href="single-freelancer-profile.html">
											<img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $key->profilepic ?>" alt="<?= $key->name ?>" height="100px" width="100px" >
										</a>
									</div>

									<!-- Name -->
									<div class="freelancer-name">
										<h4>
											<a href="<?= site_url('User/Engineer/loadEngineerProfile/'.$key->UserID) ?>"><?= $key->name ?></a>
										</h4>
									</div>

								</div>
							</div>
							
							<!-- Details -->
							<div class="freelancer-details" style="margin-top: -40px">
								<div class="freelancer-details-list">
									<ul style="text-align: center;">
										<li>Location 
											<strong>
												<i class="icon-material-outline-location-on"></i>
											 	<?= $key->CityName ?>
											</strong>
										</li>
										<li>Qualification <strong><?= $key->qualification ?></strong></li>
										<li>Experience <strong><?= $key->experience ?></strong></li>
									</ul>
								</div>
								<a href="<?= site_url('User/Engineer/loadEngineerProfile/'.$key->UserID) ?>" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
						<!-- Freelancer / End -->

				<?php
						}
					}
				?>

	
			</div>
			<!-- Freelancers Container / End -->

			<div class="clearfix"></div>
			<!-- Pagination / End -->

			<!-- Footer -->
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
	<!-- Full Page Content / End -->

</div>


</div>
<!-- Wrapper / End -->

<?php include_once('footerScript.php') ?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/freelancers-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:45:56 GMT -->
</html>