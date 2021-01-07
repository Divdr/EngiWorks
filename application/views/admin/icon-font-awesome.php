<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/icon-font-awesome.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:36:33 GMT -->
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
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />


<?php  include_once("scripts.php");  ?>

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
								<i class="feather icon-command bg-c-blue"></i>
								<div class="d-inline">
									<h5>Font Awesome</h5>
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
									<li class="breadcrumb-item"><a href="#!">Icons</a>
									</li>
									<li class="breadcrumb-item">
										<a href="#!">Font Awesome</a>
									</li>
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
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>27 New Icons <label class="label bg-success"> New </label> </h5>
												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
											<div class="card-block">
												<div class="data-table-main icon-list-demo">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-american-sign-language-interpreting"></i>
															<label class="txt-ellipsis">fa-american-sign-language-interpreting</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-asl-interpreting"></i>
															<label class="txt-ellipsis">fa-asl-interpreting</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-assistive-listening-systems"></i>
															<label class="txt-ellipsis">fa-assistive-listening-systems</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-audio-description"></i>
															<label class="txt-ellipsis">fa-audio-description</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-blind"></i>
															<label class="txt-ellipsis">fa-blind</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-braille"></i>
															<label class="txt-ellipsis">fa-braille</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-deaf"></i>
															<label class="txt-ellipsis">fa-deaf</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-deafness"></i>
															<label class="txt-ellipsis">fa-deafness</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-envira"></i>
															<label class="txt-ellipsis">fa-envira</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-first-order"></i>
															<label class="txt-ellipsis">fa-first-order</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gitlab"></i>
															<label class="txt-ellipsis">fa-gitlab</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-glide"></i>
															<label class="txt-ellipsis">fa-glide</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-glide-g"></i>
															<label class="txt-ellipsis">fa-glide-g</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hard-of-hearing"></i>
															<label class="txt-ellipsis">fa-hard-of-hearing</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-low-vision"></i>
															<label class="txt-ellipsis">fa-low-vision</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pied-piper"></i>
															<label class="txt-ellipsis">fa-pied-piper</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-question-circle-o"></i>
															<label class="txt-ellipsis">fa-question-circle-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sign-language"></i>
															<label class="txt-ellipsis">fa-sign-language</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-signing"></i>
															<label class="txt-ellipsis">fa-signing</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-snapchat"></i>
															<label class="txt-ellipsis">fa-snapchat</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-snapchat-ghost"></i>
															<label class="txt-ellipsis">fa-snapchat-ghost</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-snapchat-square"></i>
															<label class="txt-ellipsis">fa-snapchat-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-themeisle"></i>
															<label class="txt-ellipsis">fa-themeisle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-universal-access"></i>
															<label class="txt-ellipsis">fa-universal-access</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-viadeo"></i>
															<label class="txt-ellipsis">fa-viadeo</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-viadeo-square"></i>
															<label class="txt-ellipsis">fa-viadeo-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-volume-control-phone"></i>
															<label class="txt-ellipsis">fa-volume-control-phone</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-wheelchair-alt"></i>
															<label class="txt-ellipsis">fa-wheelchair-alt</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-wpbeginner"></i>
															<label class="txt-ellipsis">fa-wpbeginner</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-wpforms"></i>
															<label class="txt-ellipsis">fa-wpforms</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-yoast"></i>
															<label class="txt-ellipsis">fa-yoast</label>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>20 Icons</h5>
												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
											<div class="card-block">
												<div class="data-table-main icon-list-demo">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bluetooth"></i>
															<label class="txt-ellipsis">fa-bluetooth</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bluetooth-b"></i>
															<label class="txt-ellipsis">fa-bluetooth-b</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-codiepie"></i>
															<label class="txt-ellipsis">fa-codiepie</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-credit-card-alt"></i>
															<label class="txt-ellipsis">fa-credit-card-alt</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-edge"></i>
															<label class="txt-ellipsis">fa-edge</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-fort-awesome"></i>
															<label class="txt-ellipsis">fa-fort-awesome</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hashtag"></i>
															<label class="txt-ellipsis">fa-hashtag</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mixcloud"></i>
															<label class="txt-ellipsis">fa-mixcloud</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-modx"></i>
															<label class="txt-ellipsis">fa-modx</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pause-circle"></i>
															<label class="txt-ellipsis">fa-pause-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pause-circle-o"></i>
															<label class="txt-ellipsis">fa-pause-circle-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-percent"></i>
															<label class="txt-ellipsis">fa-percent</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-product-hunt"></i>
															<label class="txt-ellipsis">fa-product-hunt</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-reddit-alien"></i>
															<label class="txt-ellipsis">fa-reddit-alien</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-scribd"></i>
															<label class="txt-ellipsis">fa-scribd</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-shopping-bag"></i>
															<label class="txt-ellipsis">fa-shopping-bag</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-shopping-basket"></i>
															<label class="txt-ellipsis">fa-shopping-basket</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-stop-circle"></i>
															<label class="txt-ellipsis">fa-stop-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-stop-circle-o"></i>
															<label class="txt-ellipsis">fa-stop-circle-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-usb"></i>
															<label class="txt-ellipsis">fa-usb</label>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>66 Icons</h5>
												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
											<div class="card-block">
												<div class="data-table-main icon-list-demo">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-500px"></i>
															<label class="txt-ellipsis">fa-500px</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-amazon"></i>
															<label class="txt-ellipsis">fa-amazon</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-balance-scale"></i>
															<label class="txt-ellipsis">fa-balance-scale</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-0"></i>
															<label class="txt-ellipsis">fa-battery-0</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-1"></i>
															<label class="txt-ellipsis">fa-battery-1</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-2"></i>
															<label class="txt-ellipsis">fa-battery-2</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-3"></i>
															<label class="txt-ellipsis">fa-battery-3</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-4"></i>
															<label class="txt-ellipsis">fa-battery-4</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-empty"></i>
															<label class="txt-ellipsis">fa-battery-empty</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-full"></i>
															<label class="txt-ellipsis">fa-battery-full</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-half"></i>
															<label class="txt-ellipsis">fa-battery-half</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-quarter"></i>
															<label class="txt-ellipsis">fa-battery-quarter</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-battery-three-quarters"></i>
															<label class="txt-ellipsis">fa-battery-three-quarters</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-black-tie"></i>
															<label class="txt-ellipsis">fa-black-tie</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-calendar-check-o"></i>
															<label class="txt-ellipsis">fa-calendar-check-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-calendar-minus-o"></i>
															<label class="txt-ellipsis">fa-calendar-minus-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-calendar-plus-o"></i>
															<label class="txt-ellipsis">fa-calendar-plus-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-calendar-times-o"></i>
															<label class="txt-ellipsis">fa-calendar-times-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-diners-club"></i>
															<label class="txt-ellipsis">fa-cc-diners-club</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-jcb"></i>
															<label class="txt-ellipsis">fa-cc-jcb</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-chrome"></i>
															<label class="txt-ellipsis">fa-chrome</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-clone"></i>
															<label class="txt-ellipsis">fa-clone</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-commenting"></i>
															<label class="txt-ellipsis">fa-commenting</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-commenting-o"></i>
															<label class="txt-ellipsis">fa-commenting-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-contao"></i>
															<label class="txt-ellipsis">fa-contao</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-creative-commons"></i>
															<label class="txt-ellipsis">fa-creative-commons</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-expeditedssl"></i>
															<label class="txt-ellipsis">fa-expeditedssl</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-firefox"></i>
															<label class="txt-ellipsis">fa-firefox</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-fonticons"></i>
															<label class="txt-ellipsis">fa-fonticons</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-genderless"></i>
															<label class="txt-ellipsis">fa-genderless</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-get-pocket"></i>
															<label class="txt-ellipsis">fa-get-pocket</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gg"></i>
															<label class="txt-ellipsis">fa-gg</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gg-circle"></i>
															<label class="txt-ellipsis">fa-gg-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-grab-o"></i>
															<label class="txt-ellipsis">fa-hand-grab-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-lizard-o"></i>
															<label class="txt-ellipsis">fa-hand-lizard-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-paper-o"></i>
															<label class="txt-ellipsis">fa-hand-paper-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-peace-o"></i>
															<label class="txt-ellipsis">fa-hand-peace-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-pointer-o"></i>
															<label class="txt-ellipsis">fa-hand-pointer-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-rock-o"></i>
															<label class="txt-ellipsis">fa-hand-rock-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-scissors-o"></i>
															<label class="txt-ellipsis">fa-hand-scissors-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-spock-o"></i>
															<label class="txt-ellipsis">fa-hand-spock-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hand-stop-o"></i>
															<label class="txt-ellipsis">fa-hand-stop-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass"></i>
															<label class="txt-ellipsis">fa-hourglass</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass-1"></i>
															<label class="txt-ellipsis">fa-hourglass-1</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass-2"></i>
															<label class="txt-ellipsis">fa-hourglass-2</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass-3"></i>
															<label class="txt-ellipsis">fa-hourglass-3</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass-end"></i>
															<label class="txt-ellipsis">fa-hourglass-end</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass-half"></i>
															<label class="txt-ellipsis">fa-hourglass-half</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass-o"></i>
															<label class="txt-ellipsis">fa-hourglass-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hourglass-start"></i>
															<label class="txt-ellipsis">fa-hourglass-start</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-houzz"></i>
															<label class="txt-ellipsis">fa-houzz</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-i-cursor"></i>
															<label class="txt-ellipsis">fa-i-cursor</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-industry"></i>
															<label class="txt-ellipsis">fa-industry</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-internet-explorer"></i>
															<label class="txt-ellipsis">fa-internet-explorer</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-map"></i>
															<label class="txt-ellipsis">fa-map</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-map-o"></i>
															<label class="txt-ellipsis">fa-map-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-map-pin"></i>
															<label class="txt-ellipsis">fa-map-pin</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-map-signs"></i>
															<label class="txt-ellipsis">fa-map-signs</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mouse-pointer"></i>
															<label class="txt-ellipsis">fa-mouse-pointer</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-object-group"></i>
															<label class="txt-ellipsis">fa-object-group</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-object-ungroup"></i>
															<label class="txt-ellipsis">fa-object-ungroup</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-odnoklassniki"></i>
															<label class="txt-ellipsis">fa-odnoklassniki</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-odnoklassniki-square"></i>
															<label class="txt-ellipsis">fa-odnoklassniki-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-opencart"></i>
															<label class="txt-ellipsis">fa-opencart</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-opera"></i>
															<label class="txt-ellipsis">fa-opera</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-optin-monster"></i>
															<label class="txt-ellipsis">fa-optin-monster</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-registered"></i>
															<label class="txt-ellipsis">fa-registered</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-safari"></i>
															<label class="txt-ellipsis">fa-safari</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sticky-note"></i>
															<label class="txt-ellipsis">fa-sticky-note</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sticky-note-o"></i>
															<label class="txt-ellipsis">fa-sticky-note-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-television"></i>
															<label class="txt-ellipsis">fa-television</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-trademark"></i>
															<label class="txt-ellipsis">fa-trademark</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tripadvisor"></i>
															<label class="txt-ellipsis">fa-tripadvisor</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tv"></i>
															<label class="txt-ellipsis">fa-tv</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-vimeo"></i>
															<label class="txt-ellipsis">fa-vimeo</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-wikipedia-w"></i>
															<label class="txt-ellipsis">fa-wikipedia-w</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-y-combinator"></i>
															<label class="txt-ellipsis">fa-y-combinator</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-yc"></i>
															<label class="txt-ellipsis">fa-yc</label>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>40 Icons</h5>
												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
											<div class="card-block">
												<div class="data-table-main icon-list-demo">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bed"></i>
															<label class="txt-ellipsis"> fa-bed</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-buysellads"></i>
															<label class="txt-ellipsis"> fa-buysellads</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cart-arrow-down"></i>
															<label class="txt-ellipsis"> fa-cart-arrow-down</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cart-plus"></i>
															<label class="txt-ellipsis"> fa-cart-plus</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-connectdevelop"></i>
															<label class="txt-ellipsis"> fa-connectdevelop</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-dashcube"></i>
															<label class="txt-ellipsis"> fa-dashcube</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-diamond"></i>
															<label class="txt-ellipsis"> fa-diamond</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-facebook-official"></i>
															<label class="txt-ellipsis"> fa-facebook-official</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-forumbee "></i>
															<label class="txt-ellipsis"> fa-forumbee </label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-heartbeat"></i>
															<label class="txt-ellipsis"> fa-heartbeat</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bed"></i>
															<label class="txt-ellipsis"> fa-bed</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-leanpub"></i>
															<label class="txt-ellipsis"> fa-leanpub</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mars"></i>
															<label class="txt-ellipsis"> fa-mars</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mars-double"></i>
															<label class="txt-ellipsis"> fa-mars-double</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mars-stroke"></i>
															<label class="txt-ellipsis"> fa-mars-stroke</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mars-stroke-h "></i>
															<label class="txt-ellipsis"> fa-mars-stroke-h </label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mars-stroke-v"></i>
															<label class="txt-ellipsis"> fa-mars-stroke-v</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-medium "></i>
															<label class="txt-ellipsis"> fa-medium </label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mercury"></i>
															<label class="txt-ellipsis"> fa-mercury</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-motorcycle"></i>
															<label class="txt-ellipsis"> fa-motorcycle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-neuter "></i>
															<label class="txt-ellipsis"> fa-neuter </label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pinterest-p "></i>
															<label class="txt-ellipsis"> fa-pinterest-p </label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sellsy"></i>
															<label class="txt-ellipsis"> fa-sellsy</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-server"></i>
															<label class="txt-ellipsis"> fa-server</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ship"></i>
															<label class="txt-ellipsis"> fa-ship</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-shirtsinbulk"></i>
															<label class="txt-ellipsis"> fa-shirtsinbulk</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-simplybuilt"></i>
															<label class="txt-ellipsis"> fa-simplybuilt</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-skyatlas"></i>
															<label class="txt-ellipsis"> fa-skyatlas</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-street-view"></i>
															<label class="txt-ellipsis"> fa-street-view</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-subway"></i>
															<label class="txt-ellipsis"> fa-subway</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-train"></i>
															<label class="txt-ellipsis"> fa-train</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-transgender"></i>
															<label class="txt-ellipsis"> fa-transgender</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-transgender-alt "></i>
															<label class="txt-ellipsis"> fa-transgender-alt
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-user-plus"></i>
															<label class="txt-ellipsis"> fa-user-plus
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-user-secret"></i>
															<label class="txt-ellipsis"> fa-user-secret</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-user-times"></i>
															<label class="txt-ellipsis"> fa-user-times
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-venus"></i>
															<label class="txt-ellipsis"> fa-venus</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-venus-double"></i>
															<label class="txt-ellipsis"> fa-venus-double</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-venus-mars "></i>
															<label class="txt-ellipsis"> fa-venus-mars </label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-viacoin"></i>
															<label class="txt-ellipsis"> fa-viacoin</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-whatsapp"></i>
															<label class="txt-ellipsis"> fa-whatsapp</label>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>40 Icons </h5>
												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
											<div class="card-block">
												<div class="data-table-main icon-list-demo">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-angellist"></i>
															<label class="txt-ellipsis"> fa-angellist</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-area-chart"></i>
															<label class="txt-ellipsis"> fa-area-chart</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-at"></i>
															<label class="txt-ellipsis"> fa-at</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bell-slash"></i>
															<label class="txt-ellipsis"> fa-bell-slash</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bell-slash-o"></i>
															<label class="txt-ellipsis"> fa-bell-slash-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bicycle"></i>
															<label class="txt-ellipsis"> fa-bicycle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-binoculars"></i>
															<label class="txt-ellipsis"> fa-binoculars</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-birthday-cake"></i>
															<label class="txt-ellipsis"> fa-birthday-cake</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bus"></i>
															<label class="txt-ellipsis"> fa-bus</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-calculator"></i>
															<label class="txt-ellipsis"> fa-calculator</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc"></i>
															<label class="txt-ellipsis"> fa-cc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-amex"></i>
															<label class="txt-ellipsis"> fa-cc-amex</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-discover"></i>
															<label class="txt-ellipsis"> fa-cc-discover</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-mastercard"></i>
															<label class="txt-ellipsis"> fa-cc-mastercard</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-paypal"></i>
															<label class="txt-ellipsis"> fa-cc-paypal</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-stripe"></i>
															<label class="txt-ellipsis"> fa-cc-stripe</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cc-visa"></i>
															<label class="txt-ellipsis"> fa-cc-visa</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-copyright"></i>
															<label class="txt-ellipsis"> fa-copyright</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-eyedropper"></i>
															<label class="txt-ellipsis"> fa-eyedropper</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-futbol-o"></i>
															<label class="txt-ellipsis"> fa-futbol-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-google-wallet"></i>
															<label class="txt-ellipsis"> fa-google-wallet</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ils"></i>
															<label class="txt-ellipsis"> fa-ils</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ioxhost"></i>
															<label class="txt-ellipsis"> fa-ioxhost</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-lastfm"></i>
															<label class="txt-ellipsis"> fa-lastfm</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-lastfm-square"></i>
															<label class="txt-ellipsis"> fa-lastfm-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-line-chart"></i>
															<label class="txt-ellipsis"> fa-line-chart</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-meanpath"></i>
															<label class="txt-ellipsis"> fa-meanpath</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-newspaper-o"></i>
															<label class="txt-ellipsis"> fa-newspaper-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-paint-brush"></i>
															<label class="txt-ellipsis"> fa-paint-brush</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-paypal"></i>
															<label class="txt-ellipsis"> fa-paypal</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pie-chart"></i>
															<label class="txt-ellipsis"> fa-pie-chart</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plug"></i>
															<label class="txt-ellipsis"> fa-plug</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-shekel"></i>
															<label class="txt-ellipsis"> fa-shekel <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sheqel"></i>
															<label class="txt-ellipsis"> fa-sheqel <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-slideshare"></i>
															<label class="txt-ellipsis"> fa-slideshare</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-soccer-ball-o"></i>
															<label class="txt-ellipsis"> fa-soccer-ball-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-toggle-off"></i>
															<label class="txt-ellipsis"> fa-toggle-off</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-toggle-on"></i>
															<label class="txt-ellipsis"> fa-toggle-on</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-trash"></i>
															<label class="txt-ellipsis"> fa-trash</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tty"></i>
															<label class="txt-ellipsis"> fa-tty</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-twitch"></i>
															<label class="txt-ellipsis"> fa-twitch</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-wifi"></i>
															<label class="txt-ellipsis"> fa-wifi</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-yelp"></i>
															<label class="txt-ellipsis"> fa-yelp</label>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>Web Application</h5>
												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
											<div class="card-block">
												<div class="data-table-main icon-list-demo">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-adjust"></i>
															<label class="txt-ellipsis"> fa-adjust</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-anchor"></i>
															<label class="txt-ellipsis"> fa-anchor</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-archive"></i>
															<label class="txt-ellipsis"> fa-archive</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-arrows"></i>
															<label class="txt-ellipsis"> fa-arrows</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-arrows-h"></i>
															<label class="txt-ellipsis"> fa-arrows-h</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-arrows-v"></i>
															<label class="txt-ellipsis"> fa-arrows-v</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-asterisk"></i>
															<label class="txt-ellipsis"> fa-asterisk</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-automobile"></i>
															<label class="txt-ellipsis"> fa-automobile <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ban"></i>
															<label class="txt-ellipsis"> fa-ban</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bank"></i>
															<label class="txt-ellipsis"> fa-bank <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bar-chart-o"></i>
															<label class="txt-ellipsis"> fa-bar-chart-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-barcode"></i>
															<label class="txt-ellipsis"> fa-barcode</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bars"></i>
															<label class="txt-ellipsis"> fa-bars</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-beer"></i>
															<label class="txt-ellipsis"> fa-beer</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bell"></i>
															<label class="txt-ellipsis"> fa-bell</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bell-o"></i>
															<label class="txt-ellipsis"> fa-bell-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bolt"></i>
															<label class="txt-ellipsis"> fa-bolt</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bomb"></i>
															<label class="txt-ellipsis"> fa-bomb</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-book"></i>
															<label class="txt-ellipsis"> fa-book</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bookmark"></i>
															<label class="txt-ellipsis"> fa-bookmark</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bookmark-o"></i>
															<label class="txt-ellipsis"> fa-bookmark-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-briefcase"></i>
															<label class="txt-ellipsis"> fa-briefcase</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bug"></i>
															<label class="txt-ellipsis"> fa-bug</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-building"></i>
															<label class="txt-ellipsis"> fa-building</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-building-o"></i>
															<label class="txt-ellipsis"> fa-building-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bullhorn"></i>
															<label class="txt-ellipsis"> fa-bullhorn</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bullseye"></i>
															<label class="txt-ellipsis"> fa-bullseye</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cab"></i>
															<label class="txt-ellipsis"> fa-cab <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-calendar"></i>
															<label class="txt-ellipsis"> fa-calendar</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-calendar-o"></i>
															<label class="txt-ellipsis"> fa-calendar-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-camera"></i>
															<label class="txt-ellipsis"> fa-camera</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-camera-retro"></i>
															<label class="txt-ellipsis"> fa-camera-retro</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-car"></i>
															<label class="txt-ellipsis"> fa-car</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-caret-square-o-down"></i>
															<label class="txt-ellipsis"> fa-caret-square-o-down</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-caret-square-o-left"></i>
															<label class="txt-ellipsis"> fa-caret-square-o-left</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-caret-square-o-right"></i>
															<label class="txt-ellipsis"> fa-caret-square-o-right</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-caret-square-o-up"></i>
															<label class="txt-ellipsis"> fa-caret-square-o-up</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-certificate"></i>
															<label class="txt-ellipsis"> fa-certificate</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-check"></i>
															<label class="txt-ellipsis"> fa-check</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-check-circle"></i>
															<label class="txt-ellipsis"> fa-check-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-check-circle-o"></i>
															<label class="txt-ellipsis"> fa-check-circle-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-check-square"></i>
															<label class="txt-ellipsis"> fa-check-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-check-square-o"></i>
															<label class="txt-ellipsis"> fa-check-square-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-child"></i>
															<label class="txt-ellipsis"> fa-child</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-circle"></i>
															<label class="txt-ellipsis"> fa-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-circle-o"></i>
															<label class="txt-ellipsis"> fa-circle-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-circle-o-notch"></i>
															<label class="txt-ellipsis"> fa-circle-o-notch</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-circle-thin"></i>
															<label class="txt-ellipsis"> fa-circle-thin</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-clock-o"></i>
															<label class="txt-ellipsis"> fa-clock-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cloud"></i>
															<label class="txt-ellipsis"> fa-cloud</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cloud-download"></i>
															<label class="txt-ellipsis"> fa-cloud-download</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cloud-upload"></i>
															<label class="txt-ellipsis"> fa-cloud-upload</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-code"></i>
															<label class="txt-ellipsis"> fa-code</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-code-fork"></i>
															<label class="txt-ellipsis"> fa-code-fork</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-coffee"></i>
															<label class="txt-ellipsis"> fa-coffee</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cog"></i>
															<label class="txt-ellipsis"> fa-cog</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cogs"></i>
															<label class="txt-ellipsis"> fa-cogs</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-comment"></i>
															<label class="txt-ellipsis"> fa-comment</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-comment-o"></i>
															<label class="txt-ellipsis"> fa-comment-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-comments"></i>
															<label class="txt-ellipsis"> fa-comments</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-comments-o"></i>
															<label class="txt-ellipsis"> fa-comments-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-compass"></i>
															<label class="txt-ellipsis"> fa-compass</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-credit-card"></i>
															<label class="txt-ellipsis"> fa-credit-card</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-crop"></i>
															<label class="txt-ellipsis"> fa-crop</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-crosshairs"></i>
															<label class="txt-ellipsis"> fa-crosshairs</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cube"></i>
															<label class="txt-ellipsis"> fa-cube</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cubes"></i>
															<label class="txt-ellipsis"> fa-cubes</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cutlery"></i>
															<label class="txt-ellipsis"> fa-cutlery</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-dashboard"></i>
															<label class="txt-ellipsis"> fa-dashboard <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-database"></i>
															<label class="txt-ellipsis"> fa-database</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-desktop"></i>
															<label class="txt-ellipsis"> fa-desktop</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-dot-circle-o"></i>
															<label class="txt-ellipsis"> fa-dot-circle-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-download"></i>
															<label class="txt-ellipsis"> fa-download</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-edit"></i>
															<label class="txt-ellipsis"> fa-edit <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ellipsis-h"></i>
															<label class="txt-ellipsis"> fa-ellipsis-h</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ellipsis-v"></i>
															<label class="txt-ellipsis"> fa-ellipsis-v</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-envelope"></i>
															<label class="txt-ellipsis"> fa-envelope</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-envelope-o"></i>
															<label class="txt-ellipsis"> fa-envelope-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-envelope-square"></i>
															<label class="txt-ellipsis"> fa-envelope-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-eraser"></i>
															<label class="txt-ellipsis"> fa-eraser</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-exchange"></i>
															<label class="txt-ellipsis"> fa-exchange</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-exclamation"></i>
															<label class="txt-ellipsis"> fa-exclamation</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-exclamation-circle"></i>
															<label class="txt-ellipsis"> fa-exclamation-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-exclamation-triangle"></i>
															<label class="txt-ellipsis"> fa-exclamation-triangle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-external-link"></i>
															<label class="txt-ellipsis"> fa-external-link</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-external-link-square"></i>
															<label class="txt-ellipsis"> fa-external-link-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-eye"></i>
															<label class="txt-ellipsis"> fa-eye</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-eye-slash"></i>
															<label class="txt-ellipsis"> fa-eye-slash</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-fax"></i>
															<label class="txt-ellipsis"> fa-fax</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-female"></i>
															<label class="txt-ellipsis"> fa-female</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-fighter-jet"></i>
															<label class="txt-ellipsis"> fa-fighter-jet</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-archive-o"></i>
															<label class="txt-ellipsis"> fa-file-archive-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-audio-o"></i>
															<label class="txt-ellipsis"> fa-file-audio-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-code-o"></i>
															<label class="txt-ellipsis"> fa-file-code-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-excel-o"></i>
															<label class="txt-ellipsis"> fa-file-excel-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-image-o"></i>
															<label class="txt-ellipsis"> fa-file-image-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-movie-o"></i>
															<label class="txt-ellipsis"> fa-file-movie-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-pdf-o"></i>
															<label class="txt-ellipsis"> fa-file-pdf-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-photo-o"></i>
															<label class="txt-ellipsis"> fa-file-photo-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-picture-o"></i>
															<label class="txt-ellipsis"> fa-file-picture-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-powerpoint-o"></i>
															<label class="txt-ellipsis"> fa-file-powerpoint-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-sound-o"></i>
															<label class="txt-ellipsis"> fa-file-sound-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-video-o"></i>
															<label class="txt-ellipsis"> fa-file-video-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-word-o"></i>
															<label class="txt-ellipsis"> fa-file-word-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-zip-o"></i>
															<label class="txt-ellipsis"> fa-file-zip-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-film"></i>
															<label class="txt-ellipsis"> fa-film</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-filter"></i>
															<label class="txt-ellipsis"> fa-filter</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-fire"></i>
															<label class="txt-ellipsis"> fa-fire</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-fire-extinguisher"></i>
															<label class="txt-ellipsis"> fa-fire-extinguisher</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-flag"></i>
															<label class="txt-ellipsis"> fa-flag</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-flag-checkered"></i>
															<label class="txt-ellipsis"> fa-flag-checkered</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-flag-o"></i>
															<label class="txt-ellipsis"> fa-flag-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-flash"></i>
															<label class="txt-ellipsis"> fa-flash <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-flask"></i>
															<label class="txt-ellipsis"> fa-flask</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-folder"></i>
															<label class="txt-ellipsis"> fa-folder</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-folder-o"></i>
															<label class="txt-ellipsis"> fa-folder-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-folder-open"></i>
															<label class="txt-ellipsis"> fa-folder-open</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-folder-open-o"></i>
															<label class="txt-ellipsis"> fa-folder-open-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-frown-o"></i>
															<label class="txt-ellipsis"> fa-frown-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gamepad"></i>
															<label class="txt-ellipsis"> fa-gamepad</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gavel"></i>
															<label class="txt-ellipsis"> fa-gavel</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gear"></i>
															<label class="txt-ellipsis"> fa-gear <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gears"></i>
															<label class="txt-ellipsis"> fa-gears <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gift"></i>
															<label class="txt-ellipsis"> fa-gift</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-glass"></i>
															<label class="txt-ellipsis"> fa-glass</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-globe"></i>
															<label class="txt-ellipsis"> fa-globe</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-graduation-cap"></i>
															<label class="txt-ellipsis"> fa-graduation-cap</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-group"></i>
															<label class="txt-ellipsis"> fa-group <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-hdd-o"></i>
															<label class="txt-ellipsis"> fa-hdd-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-headphones"></i>
															<label class="txt-ellipsis"> fa-headphones</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-heart"></i>
															<label class="txt-ellipsis"> fa-heart</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-heart-o"></i>
															<label class="txt-ellipsis"> fa-heart-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-history"></i>
															<label class="txt-ellipsis"> fa-history</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-home"></i>
															<label class="txt-ellipsis"> fa-home</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-image"></i>
															<label class="txt-ellipsis"> fa-image <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-inbox"></i>
															<label class="txt-ellipsis"> fa-inbox</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-info"></i>
															<label class="txt-ellipsis"> fa-info</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-info-circle"></i>
															<label class="txt-ellipsis"> fa-info-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-institution"></i>
															<label class="txt-ellipsis"> fa-institution <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-key"></i>
															<label class="txt-ellipsis"> fa-key</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-keyboard-o"></i>
															<label class="txt-ellipsis"> fa-keyboard-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-language"></i>
															<label class="txt-ellipsis"> fa-language</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-laptop"></i>
															<label class="txt-ellipsis"> fa-laptop</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-leaf"></i>
															<label class="txt-ellipsis"> fa-leaf</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-legal"></i>
															<label class="txt-ellipsis"> fa-legal <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-lemon-o"></i>
															<label class="txt-ellipsis"> fa-lemon-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-level-down"></i>
															<label class="txt-ellipsis"> fa-level-down</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-level-up"></i>
															<label class="txt-ellipsis"> fa-level-up</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-life-bouy"></i>
															<label class="txt-ellipsis"> fa-life-bouy <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-life-ring"></i>
															<label class="txt-ellipsis"> fa-life-ring</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-life-saver"></i>
															<label class="txt-ellipsis"> fa-life-saver <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-lightbulb-o"></i>
															<label class="txt-ellipsis"> fa-lightbulb-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-location-arrow"></i>
															<label class="txt-ellipsis"> fa-location-arrow</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-lock"></i>
															<label class="txt-ellipsis"> fa-lock</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-magic"></i>
															<label class="txt-ellipsis"> fa-magic</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-magnet"></i>
															<label class="txt-ellipsis"> fa-magnet</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mail-forward"></i>
															<label class="txt-ellipsis"> fa-mail-forward <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mail-reply"></i>
															<label class="txt-ellipsis"> fa-mail-reply <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mail-reply-all"></i>
															<label class="txt-ellipsis"> fa-mail-reply-all <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-male"></i>
															<label class="txt-ellipsis"> fa-male</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-map-marker"></i>
															<label class="txt-ellipsis"> fa-map-marker</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-meh-o"></i>
															<label class="txt-ellipsis"> fa-meh-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-microphone"></i>
															<label class="txt-ellipsis"> fa-microphone</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-microphone-slash"></i>
															<label class="txt-ellipsis"> fa-microphone-slash</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-minus"></i>
															<label class="txt-ellipsis"> fa-minus</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-minus-circle"></i>
															<label class="txt-ellipsis"> fa-minus-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-minus-square"></i>
															<label class="txt-ellipsis"> fa-minus-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-minus-square-o"></i>
															<label class="txt-ellipsis"> fa-minus-square-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mobile"></i>
															<label class="txt-ellipsis"> fa-mobile</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mobile-phone"></i>
															<label class="txt-ellipsis"> fa-mobile-phone <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-money"></i>
															<label class="txt-ellipsis"> fa-money</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-moon-o"></i>
															<label class="txt-ellipsis"> fa-moon-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-mortar-board"></i>
															<label class="txt-ellipsis"> fa-mortar-board <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-music"></i>
															<label class="txt-ellipsis"> fa-music</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-navicon"></i>
															<label class="txt-ellipsis"> fa-navicon <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-paper-plane"></i>
															<label class="txt-ellipsis"> fa-paper-plane</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-paper-plane-o"></i>
															<label class="txt-ellipsis"> fa-paper-plane-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-paw"></i>
															<label class="txt-ellipsis"> fa-paw</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pencil"></i>
															<label class="txt-ellipsis"> fa-pencil</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pencil-square"></i>
															<label class="txt-ellipsis"> fa-pencil-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-pencil-square-o"></i>
															<label class="txt-ellipsis"> fa-pencil-square-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-phone"></i>
															<label class="txt-ellipsis"> fa-phone</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-phone-square"></i>
															<label class="txt-ellipsis"> fa-phone-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-photo"></i>
															<label class="txt-ellipsis"> fa-photo <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-picture-o"></i>
															<label class="txt-ellipsis"> fa-picture-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plane"></i>
															<label class="txt-ellipsis"> fa-plane</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plus"></i>
															<label class="txt-ellipsis"> fa-plus</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plus-circle"></i>
															<label class="txt-ellipsis"> fa-plus-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plus-square"></i>
															<label class="txt-ellipsis"> fa-plus-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plus-square-o"></i>
															<label class="txt-ellipsis"> fa-plus-square-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-power-off"></i>
															<label class="txt-ellipsis"> fa-power-off</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-print"></i>
															<label class="txt-ellipsis"> fa-print</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-puzzle-piece"></i>
															<label class="txt-ellipsis"> fa-puzzle-piece</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-qrcode"></i>
															<label class="txt-ellipsis"> fa-qrcode</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-question"></i>
															<label class="txt-ellipsis"> fa-question</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-question-circle"></i>
															<label class="txt-ellipsis"> fa-question-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-quote-left"></i>
															<label class="txt-ellipsis"> fa-quote-left</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-quote-right"></i>
															<label class="txt-ellipsis"> fa-quote-right</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-random"></i>
															<label class="txt-ellipsis"> fa-random</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-recycle"></i>
															<label class="txt-ellipsis"> fa-recycle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-refresh"></i>
															<label class="txt-ellipsis"> fa-refresh</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-reorder"></i>
															<label class="txt-ellipsis"> fa-reorder <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-reply"></i>
															<label class="txt-ellipsis"> fa-reply</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-reply-all"></i>
															<label class="txt-ellipsis"> fa-reply-all</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-retweet"></i>
															<label class="txt-ellipsis"> fa-retweet</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-road"></i>
															<label class="txt-ellipsis"> fa-road</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-rocket"></i>
															<label class="txt-ellipsis"> fa-rocket</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-rss"></i>
															<label class="txt-ellipsis"> fa-rss</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-rss-square"></i>
															<label class="txt-ellipsis"> fa-rss-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-search"></i>
															<label class="txt-ellipsis"> fa-search</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-search-minus"></i>
															<label class="txt-ellipsis"> fa-search-minus</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-search-plus"></i>
															<label class="txt-ellipsis"> fa-search-plus</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-send"></i>
															<label class="txt-ellipsis"> fa-send <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-send-o"></i>
															<label class="txt-ellipsis"> fa-send-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-share"></i>
															<label class="txt-ellipsis"> fa-share</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-share-alt"></i>
															<label class="txt-ellipsis"> fa-share-alt</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-share-alt-square"></i>
															<label class="txt-ellipsis"> fa-share-alt-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-share-square"></i>
															<label class="txt-ellipsis"> fa-share-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-share-square-o"></i>
															<label class="txt-ellipsis"> fa-share-square-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-shield"></i>
															<label class="txt-ellipsis"> fa-shield</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-shopping-cart"></i>
															<label class="txt-ellipsis"> fa-shopping-cart</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sign-in"></i>
															<label class="txt-ellipsis"> fa-sign-in</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sign-out"></i>
															<label class="txt-ellipsis"> fa-sign-out</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-signal"></i>
															<label class="txt-ellipsis"> fa-signal</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sitemap"></i>
															<label class="txt-ellipsis"> fa-sitemap</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sliders"></i>
															<label class="txt-ellipsis"> fa-sliders</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-smile-o"></i>
															<label class="txt-ellipsis"> fa-smile-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort"></i>
															<label class="txt-ellipsis"> fa-sort</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-alpha-asc"></i>
															<label class="txt-ellipsis"> fa-sort-alpha-asc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-alpha-desc"></i>
															<label class="txt-ellipsis"> fa-sort-alpha-desc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-amount-asc"></i>
															<label class="txt-ellipsis"> fa-sort-amount-asc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-amount-desc"></i>
															<label class="txt-ellipsis"> fa-sort-amount-desc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-asc"></i>
															<label class="txt-ellipsis"> fa-sort-asc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-desc"></i>
															<label class="txt-ellipsis"> fa-sort-desc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-down"></i>
															<label class="txt-ellipsis"> fa-sort-down <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-numeric-asc"></i>
															<label class="txt-ellipsis"> fa-sort-numeric-asc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-numeric-desc"></i>
															<label class="txt-ellipsis"> fa-sort-numeric-desc</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sort-up"></i>
															<label class="txt-ellipsis"> fa-sort-up <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-space-shuttle"></i>
															<label class="txt-ellipsis"> fa-space-shuttle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-spinner"></i>
															<label class="txt-ellipsis"> fa-spinner</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-spoon"></i>
															<label class="txt-ellipsis"> fa-spoon</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-square"></i>
															<label class="txt-ellipsis"> fa-square</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-square-o"></i>
															<label class="txt-ellipsis"> fa-square-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-star"></i>
															<label class="txt-ellipsis"> fa-star</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-star-half"></i>
															<label class="txt-ellipsis"> fa-star-half</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-star-half-empty"></i>
															<label class="txt-ellipsis"> fa-star-half-empty <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-star-half-full"></i>
															<label class="txt-ellipsis"> fa-star-half-full <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-star-half-o"></i>
															<label class="txt-ellipsis"> fa-star-half-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-star-o"></i>
															<label class="txt-ellipsis"> fa-star-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-suitcase"></i>
															<label class="txt-ellipsis"> fa-suitcase</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-sun-o"></i>
															<label class="txt-ellipsis"> fa-sun-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-support"></i>
															<label class="txt-ellipsis"> fa-support <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tablet"></i>
															<label class="txt-ellipsis"> fa-tablet</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tachometer"></i>
															<label class="txt-ellipsis"> fa-tachometer</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tag"></i>
															<label class="txt-ellipsis"> fa-tag</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tags"></i>
															<label class="txt-ellipsis"> fa-tags</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tasks"></i>
															<label class="txt-ellipsis"> fa-tasks</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-taxi"></i>
															<label class="txt-ellipsis"> fa-taxi</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-terminal"></i>
															<label class="txt-ellipsis"> fa-terminal</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-thumb-tack"></i>
															<label class="txt-ellipsis"> fa-thumb-tack</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-thumbs-down"></i>
															<label class="txt-ellipsis"> fa-thumbs-down</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-thumbs-o-down"></i>
															<label class="txt-ellipsis"> fa-thumbs-o-down</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-thumbs-o-up"></i>
															<label class="txt-ellipsis"> fa-thumbs-o-up</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-thumbs-up"></i>
															<label class="txt-ellipsis"> fa-thumbs-up</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ticket"></i>
															<label class="txt-ellipsis"> fa-ticket</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-times"></i>
															<label class="txt-ellipsis"> fa-times</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-times-circle"></i>
															<label class="txt-ellipsis"> fa-times-circle</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-times-circle-o"></i>
															<label class="txt-ellipsis"> fa-times-circle-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tint"></i>
															<label class="txt-ellipsis"> fa-tint</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-toggle-down"></i>
															<label class="txt-ellipsis"> fa-toggle-down <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-toggle-left"></i>
															<label class="txt-ellipsis"> fa-toggle-left <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-toggle-right"></i>
															<label class="txt-ellipsis"> fa-toggle-right <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-toggle-up"></i>
															<label class="txt-ellipsis"> fa-toggle-up <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-trash-o"></i>
															<label class="txt-ellipsis"> fa-trash-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-tree"></i>
															<label class="txt-ellipsis"> fa-tree</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-trophy"></i>
															<label class="txt-ellipsis"> fa-trophy</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-truck"></i>
															<label class="txt-ellipsis"> fa-truck</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-umbrella"></i>
															<label class="txt-ellipsis"> fa-umbrella</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-university"></i>
															<label class="txt-ellipsis"> fa-university</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-unlock"></i>
															<label class="txt-ellipsis"> fa-unlock</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-unlock-alt"></i>
															<label class="txt-ellipsis"> fa-unlock-alt</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-unsorted"></i>
															<label class="txt-ellipsis"> fa-unsorted <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-upload"></i>
															<label class="txt-ellipsis"> fa-upload</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-user"></i>
															<label class="txt-ellipsis"> fa-user</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-users"></i>
															<label class="txt-ellipsis"> fa-users</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-video-camera"></i>
															<label class="txt-ellipsis"> fa-video-camera</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-volume-down"></i>
															<label class="txt-ellipsis"> fa-volume-down</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-volume-off"></i>
															<label class="txt-ellipsis"> fa-volume-off</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-volume-up"></i>
															<label class="txt-ellipsis"> fa-volume-up</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-warning"></i>
															<label class="txt-ellipsis"> fa-warning <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-wheelchair"></i>
															<label class="txt-ellipsis"> fa-wheelchair</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-wrench"></i>
															<label class="txt-ellipsis"> fa-wrench</label>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>File Type Icons</h5>
												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
											<div class="card-block">
												<div class="data-table-main icon-list-demo">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file"></i>
															<label class="txt-ellipsis"> fa-file</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-archive-o"></i>
															<label class="txt-ellipsis"> fa-file-archive-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-audio-o"></i>
															<label class="txt-ellipsis"> fa-file-audio-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-code-o"></i>
															<label class="txt-ellipsis"> fa-file-code-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-excel-o"></i>
															<label class="txt-ellipsis"> fa-file-excel-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-image-o"></i>
															<label class="txt-ellipsis"> fa-file-image-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-movie-o"></i>
															<label class="txt-ellipsis"> fa-file-movie-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-o"></i>
															<label class="txt-ellipsis"> fa-file-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-pdf-o"></i>
															<label class="txt-ellipsis"> fa-file-pdf-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-photo-o"></i>
															<label class="txt-ellipsis"> fa-file-photo-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-picture-o"></i>
															<label class="txt-ellipsis"> fa-file-picture-o <span class="text-muted">(alias)</span>
															</label>
														</div> 
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-powerpoint-o"></i>
															<label class="txt-ellipsis"> fa-file-powerpoint-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-sound-o"></i>
															<label class="txt-ellipsis"> fa-file-sound-o <span class="text-muted">(alias)</span>
															</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-text"></i>
															<label class="txt-ellipsis"> fa-file-text</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-text-o"></i>
															<label class="txt-ellipsis"> fa-file-text-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-video-o"></i>
															<label class="txt-ellipsis"> fa-file-video-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-word-o"></i>
															<label class="txt-ellipsis"> fa-file-word-o</label>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-file-zip-o"></i>
															<label class="txt-ellipsis"> fa-file-zip-o <span class="text-muted">(alias)</span></label>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<div class="card">
											<div class="card-header">
												<h5>Spinner Icons</h5>
												<span>These icons work great with the <code>fa-spin</code> class. Check out the
													<code>spinning icons example</code>.</span>
												</div>
												<div class="card-block">
													<div class="data-table-main icon-list-demo">
														<div class="row">
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-circle-o-notch"></i>
																<label class="txt-ellipsis">cog</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cog"></i>
																<label class="txt-ellipsis"> fa-file-archive-o</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gear"></i>
																<label class="txt-ellipsis"> gear </label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-refresh"></i>
																<label class="txt-ellipsis"> refresh</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-spinner"></i>
																<label class="txt-ellipsis"> spinner</label>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">

											<div class="card">
												<div class="card-header">
													<h5>Form Control Icons</h5>
													<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
												</div>
												<div class="card-block">
													<div class="data-table-main icon-list-demo">
														<div class="row">
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-check-square"></i>
																<label class="txt-ellipsis"> fa-check-square</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-check-square-o"></i>
																<label class="txt-ellipsis"> fa-check-square-o</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-circle"></i>
																<label class="txt-ellipsis"> fa-circle</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-circle-o"></i>
																<label class="txt-ellipsis"> fa-circle-o</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-dot-circle-o"></i>
																<label class="txt-ellipsis"> fa-dot-circle-o</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-minus-square"></i>
																<label class="txt-ellipsis"> fa-minus-square</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-minus-square-o"></i>
																<label class="txt-ellipsis"> fa-minus-square-o</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plus-square"></i>
																<label class="txt-ellipsis"> fa-plus-square</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-plus-square-o"></i>
																<label class="txt-ellipsis"> fa-plus-square-o</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-square"></i>
																<label class="txt-ellipsis"> fa-square</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-square-o"></i>
																<label class="txt-ellipsis"> fa-square-o</label>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">

											<div class="card">
												<div class="card-header">
													<h5>Currency Icons</h5>
													<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
												</div>
												<div class="card-block">
													<div class="data-table-main icon-list-demo">
														<div class="row">
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-bitcoin"></i>
																<label class="txt-ellipsis"> fa-bitcoin <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-btc"></i>
																<label class="txt-ellipsis"> fa-btc</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-cny"></i>
																<label class="txt-ellipsis"> fa-cny <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-dollar"></i>
																<label class="txt-ellipsis"> fa-dollar <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-eur"></i>
																<label class="txt-ellipsis"> fa-eur</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-euro"></i>
																<label class="txt-ellipsis"> fa-euro <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-gbp"></i>
																<label class="txt-ellipsis"> fa-gbp</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-inr"></i>
																<label class="txt-ellipsis"> fa-inr</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-jpy"></i>
																<label class="txt-ellipsis"> fa-jpy</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-krw"></i>
																<label class="txt-ellipsis"> fa-krw</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-money"></i>
																<label class="txt-ellipsis"> fa-money</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-rmb"></i>
																<label class="txt-ellipsis"> fa-rmb <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-rouble"></i>
																<label class="txt-ellipsis"> fa-rouble <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-rub"></i>
																<label class="txt-ellipsis"> fa-rub</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-ruble"></i>
																<label class="txt-ellipsis"> fa-ruble <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-rupee"></i>
																<label class="txt-ellipsis"> fa-rupee <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-try"></i>
																<label class="txt-ellipsis"> fa-try</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-turkish-lira"></i>
																<label class="txt-ellipsis"> fa-turkish-lira <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-usd"></i>
																<label class="txt-ellipsis"> fa-usd</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-won"></i>
																<label class="txt-ellipsis"> fa-won <span class="text-muted">(alias)</span>
																</label>
															</div>
															<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"><i class="fa fa-yen"></i>
																<label class="txt-ellipsis"> fa-yen <span class="text-muted">(alias)</span>
																</label>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade modal-icon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Icofonts</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="icon-list-demo">
								<i id="icon" class="fa fa-wpbeginner fa-lg"></i>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								Name
								<input class="form-control" type="text" id="name" value="fa fa-wpbeginner">
							</div>
							<div class="form-group">
								Code
								<input class="form-control" type="text" id="code" value='<i class="fa fa-wpbeginner"></i>'>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>



<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
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

<?php include_once("scripts.php"); ?>

<script type="6de68387827c668ec700579c-text/javascript">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
</body>
<!-- Mirrored from colorlib.com//polygon/admindek/default/icon-font-awesome.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 16:36:35 GMT -->
</html>
