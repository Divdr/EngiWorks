<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:30:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="colorlib" />

<?php   include_once("scripts.php");  ?>

</head>
<body>

	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>

	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

		<?php include_once("header.php"); ?>


			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					<?php include_once("aside.php"); ?>

				<div class="pcoded-content">

					<div class="page-header card">
						<div class="row align-items-end">
							<div class="col-lg-8">
								<div class="page-header-title">
									<i class="feather icon-home bg-c-blue"></i>
									<div class="d-inline">
										<h5>Dashboard</h5>
										<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="page-header-breadcrumb">
									<ul class=" breadcrumb breadcrumb-title">
										<li class="breadcrumb-item">
											<a href="index.php"><i class="feather icon-home"></i></a>
										</li>
										<li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="pcoded-inner-content">

						<div class="card">
											<div class="card-header" align="center">
												<h5 align="center">Cities</h5>
												
												<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
											</div>
											<div class="card-block table-border-style">
												<div class="table-responsive">
													<form method="post" action="<?php echo site_url("admin/AdminCity/insertcity/".$StateID)?>">
													<table class="table table-hover">
									
														<thead>
															<tr>
																<th>CITY NAME</th>
																
																<th colspan="2">OPERTIONS</th>
															</tr>
														</thead>
														<tbody>
															<?php
															foreach ($CityName as $cd) 
															{
															?>
															

<tr>															
																<th><?= $cd->CityName ?></th>
<!-- <th><a href="<?php echo site_url('admin/admin/'.$cd->StateID )?>">DELETE</a></th> -->

<th><a href="<?php echo site_url('admin/AdminCity/LoadUpdateCityByID/'.$cd->CityID )?>">UPDATE</a></th>																
	
</tr>
														
															<?php
															}
															?>


												
<th colspan="5">
	<div class="row m-t-30">
		<div class="col-md-12">
			<input type="submit" name="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-10" value="Insert City">
		</div>
	</div>
</th>				
														</tbody>
<tr></tr>



													</table>
													</form>
												</div>
											</div>
						</div>
					</div>
				</div>

				<div id="styleSelector">
				</div>

			</div>
		</div>
	</div>
</div>




<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="<?php echo base_url("resources/admin/") ?>files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="<?php echo base_url("resources/admin/") ?>files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="<?php echo base_url("resources/admin/") ?>files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="<?php echo base_url("resources/admin/") ?>files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="<?php echo base_url("resources/admin/") ?>files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->

<?php include_once("scripts.php") ?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="97516a9707ca1b26156ac72b-text/javascript"></script>
<script type="97516a9707ca1b26156ac72b-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


<!-- Mirrored from colorlib.com//polygon/admindek/default/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:34:36 GMT -->
</html>
