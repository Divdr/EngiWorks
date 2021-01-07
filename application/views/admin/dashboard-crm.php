<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/dashboard-crm.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:34:45 GMT -->
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
										<h5>Dashboard CRM</h5>
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
										<li class="breadcrumb-item"><a href="#!">Dashboard CRM</a> </li>
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

										<div class="col-xl-3 col-md-6">
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
										</div>
										<div class="col-xl-3 col-md-6">
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
										<div class="col-xl-3 col-md-6">
											<div class="card prod-p-card card-green">
												<div class="card-body">
													<div class="row align-items-center m-b-30">
														<div class="col">
															<h6 class="m-b-5 text-white">Average Price</h6>
															<h3 class="m-b-0 f-w-700 text-white">$6,780</h3>
														</div>
														<div class="col-auto">
															<i class="fas fa-dollar-sign text-c-green f-18"></i>
														</div>
													</div>
													<p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From Previous Month</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-md-6">
											<div class="card prod-p-card card-yellow">
												<div class="card-body">
													<div class="row align-items-center m-b-30">
														<div class="col">
															<h6 class="m-b-5 text-white">Product Sold</h6>
															<h3 class="m-b-0 f-w-700 text-white">6,784</h3>
														</div>
														<div class="col-auto">
															<i class="fas fa-tags text-c-yellow f-18"></i>
														</div>
													</div>
													<p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From Previous Month</p>
												</div>
											</div>
										</div>


										<div class="col-xl-6 col-md-12">
											<div class="card latest-update-card">
												<div class="card-header">
													<h5>What’s New</h5>
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
													<div class="latest-update-box">
														<div class="row p-t-20 p-b-30">
															<div class="col-auto text-right update-meta p-r-0">
																<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
															</div>
															<div class="col p-l-5">
																<a href="#!"><h6>Your Manager Posted.</h6></a>
																<p class="text-muted m-b-0">Jonny michel</p>
															</div>
														</div>
														<div class="row p-b-30">
															<div class="col-auto text-right update-meta p-r-0">
																<i class="feather icon-briefcase bg-c-red update-icon"></i>
															</div>
															<div class="col p-l-5">
																<a href="#!"><h6>You have 3 pending Task.</h6></a>
																<p class="text-muted m-b-0">Hemilton</p>
															</div>
														</div>
														<div class="row p-b-30">
															<div class="col-auto text-right update-meta p-r-0">
																<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
															</div>
															<div class="col p-l-5">
																<a href="#!"><h6>New Order Received.</h6></a>
																<p class="text-muted m-b-0">Hemilton</p>
															</div>
														</div>
														<div class="row">
															<div class="col-auto text-right update-meta p-r-0">
																<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
															</div>
															<div class="col p-l-5">
																<a href="#!"><h6>Your Manager Posted.</h6></a>
																<p class="text-muted m-b-0">Jonny michel</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-md-12">
											<div class="card new-cust-card">
												<div class="card-header">
													<h5>New Customers</h5>
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
													<div class="align-middle m-b-35">
														<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
														<div class="d-inline-block">
															<a href="#!"><h6>Alex Thompson</h6></a>
															<p class="text-muted m-b-0">Cheers!</p>
															<span class="status active"></span>
														</div>
													</div>
													<div class="align-middle m-b-35">
														<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
														<div class="d-inline-block">
															<a href="#!"><h6>John Doue</h6></a>
															<p class="text-muted m-b-0">stay hungry stay foolish!</p>
															<span class="status active"></span>
														</div>
													</div>
													<div class="align-middle m-b-35">
														<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
														<div class="d-inline-block">
															<a href="#!"><h6>Alex Thompson</h6></a>
															<p class="text-muted m-b-0">Cheers!</p>
															<span class="status deactive text-mute"><i class="far fa-clock m-r-10"></i>30 min ago</span>
														</div>
													</div>
													<div class="align-middle m-b-0">
														<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
														<div class="d-inline-block">
															<a href="#!"><h6>Alex Thompson</h6></a>
															<p class="text-muted m-b-0">Cheers!</p>
															<span class="status active"></span>
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-4 col-md-12">
											<div class="card comp-card">
												<div class="card-body">
													<div class="row align-items-center">
														<div class="col">
															<h6 class="m-b-25">Impressions</h6>
															<h3 class="f-w-700 text-c-blue">1,563</h3>
															<p class="m-b-0">May 23 - June 01 (2017)</p>
														</div>
														<div class="col-auto">
															<i class="fas fa-eye bg-c-blue"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-md-6">
											<div class="card comp-card">
												<div class="card-body">
													<div class="row align-items-center">
														<div class="col">
															<h6 class="m-b-25">Goal</h6>
															<h3 class="f-w-700 text-c-green">30,564</h3>
															<p class="m-b-0">May 23 - June 01 (2017)</p>
														</div>
														<div class="col-auto">
															<i class="fas fa-bullseye bg-c-green"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-md-6">
											<div class="card comp-card">
												<div class="card-body">
													<div class="row align-items-center">
														<div class="col">
															<h6 class="m-b-25">Impact</h6>
															<h3 class="f-w-700 text-c-yellow">42.6%</h3>
															<p class="m-b-0">May 23 - June 01 (2017)</p>
														</div>
														<div class="col-auto">
															<i class="fas fa-hand-paper bg-c-yellow"></i>
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-4 col-md-6">
											<div class="card o-hidden">
												<div class="card-header">
													<h5>Total Leads</h5>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-4">
															<p class="text-muted m-b-5">Overall</p>
															<h6>68.52%</h6>
														</div>
														<div class="col-4">
															<p class="text-muted m-b-5">Monthly</p>
															<h6>28.90%</h6>
														</div>
														<div class="col-4">
															<p class="text-muted m-b-5">Day</p>
															<h6>13.50%</h6>
														</div>
													</div>
												</div>
												<div id="sal-income" style="height:100px"></div>
											</div>
										</div>
										<div class="col-xl-4 col-md-6">
											<div class="card o-hidden">
												<div class="card-header">
													<h5>Total Vendors</h5>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-4">
															<p class="text-muted m-b-5">Overall</p>
															<h6>68.52%</h6>
														</div>
														<div class="col-4">
															<p class="text-muted m-b-5">Monthly</p>
															<h6>28.90%</h6>
														</div>
														<div class="col-4">
															<p class="text-muted m-b-5">Day</p>
															<h6>13.50%</h6>
														</div>
													</div>
												</div>
												<div id="rent-income" style="height:100px"></div>
											</div>
										</div>
										<div class="col-xl-4 col-md-12">
											<div class="card o-hidden">
												<div class="card-header">
													<h5>Invoice Generate</h5>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-4">
															<p class="text-muted m-b-5">Overall</p>
															<h6>68.52%</h6>
														</div>
														<div class="col-4">
															<p class="text-muted m-b-5">Monthly</p>
															<h6>28.90%</h6>
														</div>
														<div class="col-4">
															<p class="text-muted m-b-5">Day</p>
															<h6>13.50%</h6>
														</div>
													</div>
												</div>
												<div id="income-analysis" style="height:100px"></div>
											</div>
										</div>


										<div class="col-xl-8 col-md-12">
											<div class="card latest-update-card">
												<div class="card-header">
													<h5>Latest Activity</h5>
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
													<div class="latest-update-box">
														<div class="row p-t-20 p-b-30">
															<div class="col-auto text-right update-meta">
																<i class="feather icon-sunrise bg-c-blue update-icon"></i>
															</div>
															<div class="col">
																<h6>John Deo</h6>
																<p class="text-muted m-b-15">The trip was an amazing and a life changing experience!!</p>
																<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/mega-menu/01.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
																<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/mega-menu/03.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
															</div>
														</div>
														<div class="row p-b-30">
															<div class="col-auto text-right update-meta">
																<i class="feather icon-file-text bg-c-blue update-icon"></i>
															</div>
															<div class="col">
																<h6>Administrator</h6>
																<p class="text-muted m-b-0">Free courses for all our customers at A1 Conference Room - 9:00 am tomorrow!</p>
															</div>
														</div>
														<div class="row p-b-30">
															<div class="col-auto text-right update-meta">
																<i class="feather icon-map-pin bg-c-blue update-icon"></i>
															</div>
															<div class="col">
																<h6>Jeny William</h6>
																<p class="text-muted m-b-15">Happy Hour! Free drinks at <span> <a href="#!" class="text-c-blue">Cafe-Bar all </a> </span>day long!</p>
																<div id="markers-map" style="height:245px;width:100%"></div>
															</div>
														</div>
													</div>
													<div class="text-right">
														<a href="#!" class=" b-b-primary text-primary">View all Activity</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-md-12">
											<div class="card chat-card">
												<div class="card-header">
													<h5>Chat history</h5>
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
													<div class="row m-b-20 received-chat">
														<div class="col-auto p-r-0">
															<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40">
														</div>
														<div class="col">
															<div class="msg">
																<p class="m-b-0">Nice to meet you!</p>
															</div>
															<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
														</div>
													</div>
													<div class="row m-b-20 send-chat">
														<div class="col">
															<div class="msg">
																<p class="m-b-0">Nice to meet you!</p>
															</div>
															<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
														</div>
														<div class="col-auto p-l-0">
															<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40">
														</div>
													</div>
													<div class="row m-b-20 received-chat">
														<div class="col-auto p-r-0">
															<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40">
														</div>
														<div class="col">
															<div class="msg">
																<p class="m-b-0">Nice to meet you!</p>
																<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/mega-menu/01.jpg" alt="">
																<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/mega-menu/03.jpg" alt="">
															</div>
															<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
														</div>
													</div>
													<div class="row m-b-20 send-chat">
														<div class="col">
															<div class="msg">
																<p class="m-b-0">Come now to meet you!</p>
															</div>
															<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
														</div>
														<div class="col-auto p-l-0">
															<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40">
														</div>
													</div>
													<div class="row m-b-20 received-chat">
														<div class="col-auto p-r-0">
															<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40">
														</div>
														<div class="col">
															<div class="msg">
																<p class="m-b-0">Nice to meet you!</p>
																<img src="<?php echo base_url("resources/admin/") ?>files/assets/images/mega-menu/03.jpg" alt="">
															</div>
															<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
														</div>
													</div>
													<div class="right-icon-control">
														<div class="input-group input-group-button">
															<input type="text" class="form-control" placeholder="Send message">
															<div class="input-group-append">
																<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
															</div>
														</div>
													</div>
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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="e9c639ad95fbb668d0564941-text/javascript"></script>
<script type="e9c639ad95fbb668d0564941-text/javascript">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

</body>
<!-- Mirrored from colorlib.com//polygon/admindek/default/dashboard-crm.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:34:47 GMT -->
</html>
