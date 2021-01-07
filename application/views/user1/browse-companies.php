<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/browse-companies.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:10:47 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once("scripts.php");?>
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once("header-engi.php");?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Browse Companies</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Find Work</a></li>
						<li>Browse Companies</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-12">
	<!-- 		<div class="letters-list">
				<a href="#" class="current">A</a>
				<a href="#">B</a>
				<a href="#">C</a>
				<a href="#">D</a>
				<a href="#">E</a>
				<a href="#">F</a>
				<a href="#">G</a>
				<a href="#">H</a>
				<a href="#">I</a>
				<a href="#">J</a>
				<a href="#">K</a>
				<a href="#">L</a>
				<a href="#">M</a>
				<a href="#">N</a>
				<a href="#">O</a>
				<a href="#">P</a>
				<a href="#">Q</a>
				<a href="#">R</a>
				<a href="#">S</a>
				<a href="#">T</a>
				<a href="#">U</a>
				<a href="#">V</a>
				<a href="#">W</a>
				<a href="#">X</a>
				<a href="#">Y</a>
				<a href="#">Z</a>
			</div> -->
		</div>
		<div class="col-xl-12">
			<div class="companies-list">
				<?php
				foreach ($recinfo as $ri ) 
				{
				?>
				<a href="single-company-profile.php" class="company">
					<div class="company-inner-alignment">
						<span class="company-logo"><img src="<?= base_url("resources/user/images/recruterprofile/".$ri->RecruterPic )?>" alt=""></span>
						<h4><?= $ri->RecruterName; ?></h4>
						<div class="star-rating" data-rating="3.5"></div>
					</div>
				</a>
				<?php
				}
				?>

			</div>
		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<?php include_once("footer.php");?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once("scripts.php");?>
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

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/browse-companies.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:10:48 GMT -->
</html>