<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:45:35 GMT -->
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

			<!-- Tasks Container -->
			<div class="tasks-list-container tasks-grid-layout margin-top-35">
				
				<?php
					foreach ($prjs as $key) {
				?>
					<!-- Task -->
					<a href="<?= site_url('User/Project/loadProjectInfo/'.$key->ProjectID) ?>" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title"><?= $key->Title ?></h3>
								<ul class="task-icons">
									<li><i class="icon-material-outline-access-time"></i> <?= $key->CreatedDt ?></li>
								</ul>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								<div class="task-offers">
									<strong><?= $key->Rate ?> Rs.</strong>
								</div>
								
							</div>
						</div>
					</a>
				<?php
					}
				?>

			</div>
			<!-- Tasks Container / End -->

			<!-- Pagination -->
			
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

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:45:35 GMT -->
</html>