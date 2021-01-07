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
				<h3>Manage Candidates</h3>
				
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i><?= count($pbid) ?>  Bidders</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<?php
									foreach ($pbid as $key) {
								?>
									<li>
										<!-- Overview -->
										<div class="freelancer-overview manage-candidates">
											<div class="freelancer-overview-inner">

												<!-- Avatar -->
												<div class="freelancer-avatar">
													<a href="<?= site_url('User/User/loadUserInfo/'.$key->UserID) ?>"><img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $key->ProfilePic ?>" alt=""></a>
												</div>

												<!-- Name -->
												<div class="freelancer-name">
													<h4><a href="<?= site_url('User/User/loadUserInfo/'.$key->UserID) ?>"><?= $key->Username ?> </a></h4>

													<!-- Details -->
													<span class="freelancer-detail-item"><a href="#"><i style="color: #2A41E8" class="icon-feather-mail"></i> <span class="__cf_email__" data-cfemail="<?= $key->UserEmail ?>"><?= $key->UserEmail ?></span></a></span>
													<br><span class="freelancer-detail-item"><i style="color: #2A41E8" class="icon-material-outline-description"></i><?= $key->Description ?></span>
													
													<!-- Buttons -->
													<div class="buttons-to-right always-visible margin-top-10 margin-bottom-5">
														<form class="form-group" method="post" action="<?= site_url('User/Project/assignProject/'.$key->ProjectID.'/'.$key->UserID) ?>">
															<div class="row">
																<div class="col-md-7">
																	<input  name="txtDesc" placeholder="Enter Description" class="form-control">
																</div>
																<div class="col-md-3">
																	<input type="number" placeholder="Enter Duration" name="txtDuration" class="form-control">
																</div>
																<div class="col-md-2">
																	 <input type="submit" value="Submit" name="btnAccept" class="form-control btn btn-info">
																</div>
															</div>
														</form>
														
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