<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:47:41 GMT -->
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
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php  include_once('topNav.php') ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Page Content
================================================== -->
<div class="container" style="margin-top: 50px">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="<?= site_url('User/User') ?>">Log In!</a></span>
				</div>

				<!-- Account Type -->
				
					
				<!-- Form -->
				<form method="post" enctype="multipart/form-data" action="<?= site_url('User/User/RegisterUser/1') ?>" >
					<div class="account-type">
						<div>
							<input type="radio" id="freelancer-radio" class="account-type-radio" checked/>
							<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Recruter</label>
						</div>
					</div>
					<div class="input-with-icon-left">
						<i class="icon-feather-user"></i>
						<input type="text" class="input-text with-border" name="txtName"  placeholder="Enter Owner Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="Email" name="txtEmail" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" name="txtPass" id="password-register" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" name="txtRPass" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>

					<div class="input-with-icon-left">
						<textarea name="txtDesc" placeholder="Description" required></textarea>
					</div>

					<div class="input-with-icon-left">
						<select required name="txtCity">
							<option>select City</option>
							<?php
								foreach ($cities as $key) {
							?>
									<option value="<?= $key->CityID ?>"><?= $key->CityName ?></option>
							<?php
								}
							?>
						</select>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-feather-phone-outgoing"></i>
						<input type="text" name="txtContact" placeholder="Enter Contact No" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-map"></i>
						<input type="text" name="txtAdd" placeholder="Enter Add" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-feather-at-sign"></i>
						<input type="text" name="txtCName" placeholder="Company Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-feather-image"></i>
						<input type="file" name="txtProPic" required/>
					</div>

					<input type="submit" name="btnRegister" value="Register" class="button full-width button-sliding-icon ripple-effect margin-top-10">
				</form>
				
				<!-- Button -->
				
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<?php include_once('footerNav.php') ?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once('footerScript.php') ?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:47:41 GMT -->
</html>