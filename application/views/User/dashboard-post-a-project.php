<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:01 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once('topScript.php')  ?>

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
				<h3>Post a Project</h3>

			</div>
	
			<form method="post" enctype="multipart/form-data" action="<?= site_url('User/Project/postProject') ?>">

				<!-- Row -->
				<div class="row">

					<!-- Dashboard Box -->
					<div class="col-xl-12">
						<div class="dashboard-box margin-top-0">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-feather-folder-plus"></i> Project Submission Form</h3>
							</div>

							<div class="content with-padding padding-bottom-10">
								<div class="row">

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Project Title</h5>
											<input type="text" name="txtTitle" placeholder="Enter Project Title" class="with-border">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Project Category</h5>
											<select class="selectpicker with-border" title="Select Category" onchange="getSubCat(this.value)">
												<?php
													foreach ($cat as $key) {
												?>
													<option value="<?= $key->CategoryID ?>"><?= $key->CategoryName ?></option>
												<?php
													}
												?>
											</select>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Project Sub-Category</h5>
											<select id="SubCat" name="txtSubCat" title="Select Category First">
												<option>Select Category First</option>
											</select>
										</div>
									</div>

									<div class="col-xl-3">
										<div class="submit-field">
											<h5>Duration</h5>
											<input type="number" name="txtDuration" placeholder="Enter Duration in Hours" class="with-border">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Date</h5>
											<div class="row">
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input class="with-border" name="txtSDate" type="text" placeholder="Starting">
													</div>
												</div>
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input class="with-border" name="txtEDate" type="text" placeholder="Ending">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xl-3">
										<div class="submit-field">
											<h5>No Of Hours Per/Day</h5>
											<input type="number" name="txtHPDay" placeholder="Enter Hours" class="with-border">
										</div>
									</div>

									<div class="col-xl-2">
										<div class="submit-field">
											<h5>Rate</h5>
											<input type="number" name="txtRate" placeholder="Enter Rate" class="with-border">
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Description</h5>
											<textarea name="txtDesc" placeholder="Enter Project Description" class="with-border"></textarea>
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>URL</h5>
											<input type="text" name="txtURL" placeholder="Enter Reference URL" class="with-border">
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Upload File<span style="color: red;font-size:0.9em;margin-left: 15px ">** select only pdf file **</span></h5>
											<input type="file" accept="application/pdf" class="form-control" name="txtFile">
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12">
						<input type="submit" value="Post a Job" class="button ripple-effect big margin-top-30">
					</div>

				</div>
				<!-- Row / End -->
			</form>

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
<script type="text/javascript">
	function getSubCat(catid){
		$.ajax({url: "<?=site_url('User/Project/getSubCatByID/')?>" + catid, success: function(result){
			 		$("#SubCat").html(result);
			  }});
	}
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:05 GMT -->
</html>