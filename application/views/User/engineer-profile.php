<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:45:56 GMT -->
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
<div class="single-page-header freelancer-header" data-background-image="<?= base_url() ?>resources/user/images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar"><img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $engInfo->profilepic ?>" alt=""></div>
						<div class="header-details">
							<h3><?= $engInfo->name ?> </h3>
							<ul>
								<li><i style="color: #2a41e8;margin-right: 5px" class="icon-material-outline-account-balance"></i><?= $engInfo->CityName ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-10 col-lg-10 col-sm-12 col-xs-12 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Bio</h3>
				<p><?= $engInfo->bios ?></p>
			</div>

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Work History</h3>
				</div>
				<ul class="boxed-list-ul">
					<?php
						foreach ($wrPrj as $key) {
					?>
							<li>
								<div class="boxed-list-item">
									<!-- Content -->
									<div class="item-content">
										<h4><a href="<?= site_url('User/Project/loadProjectInfo/'.$key->ProjectID) ?>"><?= $key->Title ?></a></h4>
										<div class="item-details margin-top-10">
											<div class="detail-item"><i class="icon-material-outline-person-pin"></i>Postd By : <code><a href="<?= site_url('User/User/loadUserInfo/'.$key->UserID) ?>"><?= $key->Username ?></a></code></div>
										</div>
										<div class="item-description">
											<p><?= $key->Description ?></p>
										</div>
									</div>
								</div>
							</li>
					<?php
						}
					?>
				</ul>

				<div class="clearfix"></div>
				<!-- Pagination / End -->

			</div>
			<!-- Boxed List / End -->
			
			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-business"></i> Review</h3>
				</div>
				<form style="margin-top: 50px" method="post" enctype="multipart/form-data" action="<?= site_url('User/User/PostReview/'.$engInfo->UserId.'/'.'2') ?>" >
					<div class="row">
						<div class="col-md-8">
							<div class="input-with-icon-left">
								<i class="icon-feather-user"></i>
								<input type="text" class="input-text with-border" name="txtReview"  placeholder="Enter Review" required/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-star-border"></i>
								<input type="number" class="input-text with-border" name="txtRating"  placeholder="Enter Rating" required/>
							</div>
						</div>
						<div class="col-md-3">
							<input type="submit" name="btnReview" value="Post" class="button full-width button-sliding-icon ripple-effect margin-top-10">
						</div>
					</div>
				</form>
				<ul class="boxed-list-ul">
					<div class="row col-md-12">
						
						<?php
							foreach ($engRev as $key) {
						?>
							<li class="col-md-6">
								<div class="boxed-list-item">
									<!-- Avatar -->
									<div class="item-image">
										<img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $key->ProfilePic ?>" alt="">
									</div>
									
									<!-- Content -->
									<div class="item-content">
										<h4><?= $key->Username ?></h4>
										<div class="item-details margin-top-7">
											<div class="detail-item"><i class="icon-material-outline-date-range"></i><?= $key->CreatedDt ?> </div>
										</div>
										<div class="item-description">
											<p><?= $key->Review ?></p>
										</div>
									</div>
								</div>
							</li>
						<?php
							}
						?>
					</div>
				</ul>
			</div>
			<!-- Boxed List / End -->

			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-feather-edit-3"></i> Complaint</h3>
				</div>
				<form style="margin-top: 50px" method="post" enctype="multipart/form-data" action="<?= site_url('User/User/PostComplaint/'.$engInfo->UserId.'/'.'2') ?>" >
					<div class="row">
						<div class="col-md-10">
							<div class="input-with-icon-left">
								<i class="icon-feather-edit"></i>
								<input type="text" class="input-text with-border" name="txtComplain"  placeholder="Enter Complaint" required/>
							</div>
						</div>
						<div class="col-md-3">
							<input type="submit" name="btnComplaint" value="Post" class="button full-width button-sliding-icon ripple-effect margin-top-10">
						</div>
					</div>
				</form>
			</div>

		</div>

		</div>
		

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
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

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:01 GMT -->
</html>