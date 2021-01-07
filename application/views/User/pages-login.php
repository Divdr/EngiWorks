<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:31 GMT -->
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
<?php include_once('topNav.php') ?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In</h2>


			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>register as a Recruter <a href="<?= site_url('User/User/loadRecruterRegister') ?>">Sign Up!</a></span>
					<span>register as a Engineer <a href="<?= site_url('User/User/loadEngineerRegister') ?>">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" action="<?= site_url('User/User/doLogin') ?>">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="txtEmail" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="txtPass" id="password" placeholder="Password" required/>
					</div>
					<!-- <a href="#" class="forgot-password">Forgot Password?</a> -->
					<input class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" value="LogIn">
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

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:31 GMT -->
</html>