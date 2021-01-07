<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/dashboard-analytics.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:34:47 GMT -->
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

			<div id="sidebar" class="users p-chat-user showChat">
				<div class="had-container">
					<div class="p-fixed users-main">
						<div class="user-box">
							<div class="chat-search-box">
								<a class="back_friendlist">
									<i class="feather icon-x"></i>
								</a>
								<div class="right-icon-control">
									<div class="input-group input-group-button">
										<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
										<div class="input-group-append">
											<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="main-friend-list">
								<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-radius img-radius" src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="chat-header">Josephin Doe</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-radius" src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Lary Doe</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
									<a class="media-left" href="#!">
										<img class="media-object img-radius" src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Alice</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
									<a class="media-left" href="#!">
										<img class="media-object img-radius" src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
										<div class="live-status bg-default"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
									<a class="media-left" href="#!">
										<img class="media-object img-radius" src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
										<div class="live-status bg-default"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="showChat_inner">
				<div class="media chat-inner-header">
					<a class="back_chatBox">
						<i class="feather icon-x"></i> Josephin Doe
					</a>
				</div>
				<div class="main-friend-chat">
					<div class="media chat-messages">
						<a class="media-left photo-table" href="#!">
							<img class="media-object img-radius img-radius m-t-5" src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
						</a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
					<div class="media chat-messages">
						<div class="media-body chat-menu-reply">
							<div class="">
								<p class="chat-cont">Ohh! very nice</p>
							</div>
							<p class="chat-time">8:22 a.m.</p>
						</div>
					</div>
					<div class="media chat-messages">
						<a class="media-left photo-table" href="#!">
							<img class="media-object img-radius img-radius m-t-5" src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
						</a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">can you come with me?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
				</div>
				<div class="chat-reply-box">
					<div class="right-icon-control">
						<div class="input-group input-group-button">
							<input type="text" class="form-control" placeholder="Write hear . . ">
							<div class="input-group-append">
								<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>

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
										<h5>Dashboard Analytics</h5>
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
										<li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="pcoded-inner-content">
						<div class="main-body">
							<div class="page-wrapper">
								<div class="page-body">

									<div class="row">

										<div class="col-xl-8 col-md-12">
											<div class="card sale-card">
												<div class="card-header">
													<h5>Deals Analytics</h5>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-sm-8">
															<div id="allocation-map" class="chart-shadow" style="height:215px"></div>
														</div>
														<div class="col-sm-4">
															<div id="allocation-chart" class="chart-shadow" style="height:215px"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-md-12">
											<div class="card prod-p-card card-red">
												<div class="card-body">
													<div class="row align-items-center m-b-30">
														<div class="col">
															<h6 class="m-b-5 text-white">Total Profit</h6>
															<h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
														</div>
														<div class="col-auto">
															<i class="fas fa-money-bill-alt text-c-red f-18"></i>
														</div>
													</div>
													<p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
												</div>
											</div>
											<div class="card prod-p-card card-blue">
												<div class="card-body">
													<div class="row align-items-center m-b-30">
														<div class="col">
															<h6 class="m-b-5 text-white">Total Orders</h6>
															<h3 class="m-b-0 f-w-700 text-white">15,830</h3>
														</div>
														<div class="col-auto">
															<i class="fas fa-database text-c-blue f-18"></i>
														</div>
													</div>
													<p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
												</div>
											</div>

										</div>


										<div class="col-xl-12">
											<div class="card product-progress-card">
												<div class="card-block">
													<div class="row pp-main">
														<div class="col-xl-3 col-md-6">
															<div class="pp-cont">
																<div class="row align-items-center m-b-20">
																	<div class="col-auto">
																		<i class="fas fa-cube f-24 text-mute"></i>
																	</div>
																	<div class="col text-right">
																		<h2 class="m-b-0 text-c-blue">2476</h2>
																	</div>
																</div>
																<div class="row align-items-center m-b-15">
																	<div class="col-auto">
																		<p class="m-b-0">Total Product</p>
																	</div>
																	<div class="col text-right">
																		<p class="m-b-0 text-c-blue"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
																	</div>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-c-blue" style="width:45%"></div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="pp-cont">
																<div class="row align-items-center m-b-20">
																	<div class="col-auto">
																		<i class="fas fa-tag f-24 text-mute"></i>
																	</div>
																	<div class="col text-right">
																		<h2 class="m-b-0 text-c-red">843</h2>
																	</div>
																</div>
																<div class="row align-items-center m-b-15">
																	<div class="col-auto">
																		<p class="m-b-0">New Orders</p>
																	</div>
																	<div class="col text-right">
																		<p class="m-b-0 text-c-red"><i class="fas fa-long-arrow-alt-down m-r-10"></i>34%</p>
																	</div>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-c-red" style="width:75%"></div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="pp-cont">
																<div class="row align-items-center m-b-20">
																	<div class="col-auto">
																		<i class="fas fa-random f-24 text-mute"></i>
																	</div>
																	<div class="col text-right">
																		<h2 class="m-b-0 text-c-yellow">63%</h2>
																	</div>
																</div>
																<div class="row align-items-center m-b-15">
																	<div class="col-auto">
																		<p class="m-b-0">Conversion Rate</p>
																	</div>
																	<div class="col text-right">
																		<p class="m-b-0 text-c-yellow"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
																	</div>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-c-yellow" style="width:65%"></div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="pp-cont">
																<div class="row align-items-center m-b-20">
																	<div class="col-auto">
																		<i class="fas fa-dollar-sign f-24 text-mute"></i>
																	</div>
																	<div class="col text-right">
																		<h2 class="m-b-0 text-c-green">41M</h2>
																	</div>
																</div>
																<div class="row align-items-center m-b-15">
																	<div class="col-auto">
																		<p class="m-b-0">Conversion Rate</p>
																	</div>
																	<div class="col text-right">
																		<p class="m-b-0 text-c-green"><i class="fas fa-long-arrow-alt-up m-r-10"></i>54%</p>
																	</div>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-c-green" style="width:35%"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-8 col-md-12">
											<div class="card table-card">
												<div class="card-header">
													<h5>Application Sales</h5>
													<div class="card-header-right">
														<ul class="list-unstyled card-option">
															<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
															<li><i class="feather icon-maximize full-card"></i></li>
															<li><i class="feather icon-minus minimize-card"></i></li>
															<li><i class="feather icon-refresh-cw reload-card"></i></li>
															<li><i class="feather icon-trash close-card"></i></li>
															<li><i class="feather icon-chevron-left open-card-option"></i></li>
														</ul>
													</div>
												</div>
												<div class="card-block">
													<div class="table-responsive">
														<table class="table table-hover m-b-0  table-borderless">
															<thead>
																<tr>
																	<th>Application</th>
																	<th>Sales</th>
																	<th>Change</th>
																	<th>Avg Price</th>
																	<th>Total</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<div class="d-inline-block align-middle">
																			<h6>Able Pro</h6>
																			<p class="text-muted m-b-0">Powerful Admin Theme</p>
																		</div>
																	</td>
																	<td>16,300</td>
																	<td>
																		<div id="app-sale1" style="height:50px"></div>
																	</td>
																	<td>$53</td>
																	<td class="text-c-blue">$15,652</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-inline-block align-middle">
																			<h6>Photoshop</h6>
																			<p class="text-muted m-b-0">Design Software</p>
																		</div>
																	</td>
																	<td>26,421</td>
																	<td>
																		<div id="app-sale2" style="height:50px"></div>
																	</td>
																	<td>$35</td>
																	<td class="text-c-blue">$18,785</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-inline-block align-middle">
																			<h6>Flatable</h6>
																			<p class="text-muted m-b-0">Admin App</p>
																		</div>
																	</td>
																	<td>10,652</td>
																	<td>
																		<div id="app-sale4" style="height:50px"></div>
																	</td>
																	<td>$20</td>
																	<td class="text-c-blue">$7,856</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-md-12">
											<div class="card sale-card">
												<div class="card-header">
													<h5>Realtime Profit</h5>
												</div>
												<div class="card-block text-center">
													<div id="realtime-profit" style="height:315px"></div>
												</div>
											</div>
										</div>


										<div class="col-md-12">
											<div class="card">
												<div class="card-header">
													<h5>Sales Analytics</h5>
													<div class="card-header-right">
														<ul class="list-unstyled card-option">
															<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
															<li><i class="feather icon-maximize full-card"></i></li>
															<li><i class="feather icon-minus minimize-card"></i></li>
															<li><i class="feather icon-refresh-cw reload-card"></i></li>
															<li><i class="feather icon-trash close-card"></i></li>
															<li><i class="feather icon-chevron-left open-card-option"></i></li>
														</ul>
													</div>
												</div>
												<div class="card-block">
													<div id="sales-analytics" style="height: 390px;"></div>
												</div>
											</div>
										</div>

									</div>

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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="6447a213406773fbc34264ed-text/javascript"></script>
<script type="6447a213406773fbc34264ed-text/javascript">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

</body>

<!-- Mirrored from colorlib.com//polygon/admindek/default/dashboard-analytics.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:34:48 GMT -->
</html>
