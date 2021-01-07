<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:13:03 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once("scripts.php") ?>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once("header.php");?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			
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
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="pages-login.php">Log In!</a></span>
				</div>

				<!-- Account Type -->
				
					
				<!-- Form -->
				<form method="post" id="register-account-form" action="<?php echo site_url("user/UserRegister/insertregdata/") ?>">

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="name-register" id="name-register" placeholder="Name" required/>
					</div>


					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="username-register" id="username-register" placeholder="User Name" required/>
					</div>
	<!-- <div class="input-with-icon-left">
						<table>
						<tr>
							<td style="margin-left: -10%">gender   :-	  </td>

							<td style="position: absolute; height: 20px;margin-top:5px ;">
								<input  type="radio" name="gender" value="male">
							</td>
							<td style="position: absolute ;width:50px;margin-left: 5%;">
								male
							</td>

							<td style="position: absolute; height: 20px;margin-top:5px;margin-left: 30%;">
								<input  type="radio" name="gender" value="female">
							</td>
							<td style="position: absolute ;width:50px;margin-left: 35%;">
								female
							</td>
						</tr>
						</table>
					</div> -->
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="contact-register" id="emailaddress-register" placeholder="Contact No" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="bios-register" id="emailaddress-register" placeholder="Bios" required/>
					</div>

					<!-- <div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="date" class="input-text with-border" name="bdate-register" id="bdate-register" placeholder="Birth date" required/>
					</div> -->
<!-- <div class="input-with-icon-left">
			<tr>
				<td>
					<?php
						$a=1;
					?>		
					<select name="selexp" placeholder="select experince">
						<option>select experince</option>
					<?php
						for ($a=1; $a <= 20; $a++) 
						{ 
					?>
						<option value="<?php echo $a ; ?>" ><?php echo $a;?></option>
					<?php
						}
					?>	
					</select>
				</td>
			</tr>
</div> -->
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="bios-register" id="qualification-register" placeholder="Quaification" required/>
					</div>


					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form"><input type="submit" name="btnsubmit" value="Register "><i class="icon-material-outline-arrow-right-alt"></i></button>
				
				</form>
				<!-- Social Login -->
				
				
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<?php include_once("footer.php")?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once("scripts.php") ?>
<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:13:03 GMT -->
</html>