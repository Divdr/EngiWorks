<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:08 GMT -->
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
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
			
			
				<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<form method="post" enctype="multipart/form-data" action="<?= site_url('User/User/changeProfilePic') ?>">
									<div class="col-auto">
										<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
											<img class="profile-pic" src="<?= base_url() ?>resources/user/images/UserProfile/<?php if($_SESSION['UTP']==2){ echo $usrData->profilepic; }else{ echo $usrData->RecruterPic; } ?> " alt="" />
											<div class="upload-button"></div>
											<input class="file-upload" name="txtFile" type="file" accept="image/*"/>

										</div>
										<input type="submit" class="btn btn-info" value="Change Profile">
									</div>
								</form>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input disabled name="txtEmail" class="with-border" value="<?php if($_SESSION['UTP']==2){ echo $usrData->email; }else{ echo $usrData->RecruterEmail; } ?> ">
											</div>
										</div>

										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<h5>Account Type</h5>
												<div class="account-type">
													<?php
														if($_SESSION['UTP']==2){
													?>
															<div>
																<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
																<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Engineer</label>
															</div>
													<?php
														}else{
													?>
															<div>
																<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio" checked/>
																<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Recruter</label>
															</div>
													<?php
														}
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
					<!-- Dashboard Box -->
				<div class="col-xl-12">
					<form method="post" action="<?= site_url('User/User/updateUserInfo') ?>">
						<div class="dashboard-box">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-material-outline-face"></i> My Profile</h3>
							</div>
							<div class="content">
								<ul class="fields-ul">
									<li>
										<?php
											if($_SESSION['UTP']==1){
										?>
											
												<div class="row">	
													<div class="col-xl-12">
														<div class="submit-field">
															<h5>Name</h5>
															<input type="text" value="<?= $usrData->name ?>" name="txtRname">
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-xl-4">
														<div class="submit-field">
															<h5>Contact No</h5>
															<input type="number" value="<?= $usrData->RecruterContact ?>" name="txtRcontact">
														</div>
													</div>

													<div class="col-xl-4">
														<div class="submit-field">
															<h5>Add</h5>
															<input name="txtRadd" value="<?= $usrData->RecruterAdd ?>">
														</div>
													</div>

													<div class="col-xl-4">
														<div class="submit-field">
															<h5>Web Site</h5>
															<input value="<?= $usrData->websiteurl ?>" name="txtRweburl">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xl-6">
														<div class="submit-field">
															<h5>Company Name</h5>
															<input value="<?= $usrData->CompanyName ?>" name="txtRcmpname">
														</div>
													</div>

													<div class="col-xl-6">
														<div class="submit-field">
															<h5>City</h5>
															<select class="selectpicker with-border" name="txtRcity" data-size="7" title="Select Your City" data-live-search="true">
																<?php
																	foreach ($cities as $key) {
																?>
																		<option value="<?= $key->CityID ?>" <?php  if($usrData->CityID==$key->CityID){ ?> selected <?php } ?>><?= $key->CityName ?></option>
																<?php 
																	 } 
																?>
															</select>
														</div>
													</div>

													<div class="col-xl-12">
														<div class="submit-field">
															<h5>Description</h5>
															<textarea cols="30" name="txtRdesc" rows="5" class="with-border"><?= $usrData->Description ?></textarea>
														</div>
													</div>
												</div>
										<?php
											}else{
										?>
												<div class="row">
													<div class="col-xl-4">
														<div class="submit-field">
															<h5>Name</h5>
															<input name="txtEname" value="<?= $usrData->name ?>">
														</div>
													</div>

													<div class="col-xl-4">
														<div class="submit-field">
															<h5>Birth Date</h5>
															<input type="date" name="txtEdob" value="<?= $usrData->birthdate  ?>">
														</div>
													</div>

													<div class="col-xl-4">
														<div class="submit-field">
															<h5>Qualification</h5>
															<input type="text" name="txtEqualification" value="<?= $usrData->qualification ?>">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xl-6">
														<div class="submit-field">
															<h5>Experience</h5>
															<input type="number" name="txtEexperience" value="<?= $usrData->experience ?>">
														</div>
													</div>

													<div class="col-xl-6">
														<div class="submit-field">
															<h5>City</h5>
															<select class="selectpicker with-border" name="txtEcity" data-size="7" title="Select Your City" data-live-search="true">
																<?php
																	foreach ($cities as $key) {
																?>
																		<option value="<?= $key->CityID ?>" <?php  if($usrData->CityID==$key->CityID){ ?> selected <?php } ?>><?= $key->CityName ?></option>
																<?php 
																	 } 
																?>
															</select>
														</div>
													</div>

													<div class="col-xl-12">
														<div class="submit-field">
															<h5>Bio</h5>
															<textarea name="txtEbio" cols="30" rows="5" class="with-border"><?= $usrData->bios ?></textarea>
														</div>
													</div>
												</div>
										<?php
											}
										?>
												<div class="col-xl-12">
													<div class="submit-field">
														<input type="submit" name="btnUpdate" value="Update Info">
													</div>
												</div>
									</li>
								</ul>
							</div>
						</div>
					</form>
				</div>

					

				

					<!-- Dashboard Box -->
				<div class="col-xl-12">
					<form method="post" action="<?= site_url('User/User/changePassword') ?>">
						<div id="test1" class="dashboard-box">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
							</div>

							<div class="content with-padding">
								<div class="row">
									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Current Password</h5>
											<input type="password" name="txtOldPass" class="with-border">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>New Password</h5>
											<input type="password" name="txtNewPass" class="with-border">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Repeat New Password</h5>
											<input type="password" name="txtRNewPass" class="with-border">
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<input type="submit" name="btnChangePass" value="Change Password" class="form-control btn btn-info with-border">
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
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

<?php  include_once('footerScript.php') ?>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:08 GMT -->
</html>