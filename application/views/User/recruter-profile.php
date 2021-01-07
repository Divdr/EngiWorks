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
						<div class="header-image freelancer-avatar"><img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $recInfo->RecruterPic ?>" alt=""></div>
						<div class="header-details">
							<h3><?= $recInfo->name ?></h3>
							<ul>
								<li><i style="color: #2a41e8;margin-right: 5px" class="icon-material-outline-account-balance"></i><?= $recInfo->CityName ?></li>
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
				<h3 class="margin-bottom-25">Description</h3>
				<p><?= $recInfo->Description ?></p>
			</div>

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Work History and Feedback</h3>
				</div>
				<ul class="boxed-list-ul">
					<?php
						foreach ($prj as $key) {
					?>
							<li>
								<div class="boxed-list-item">
									<div class="item-content">
										<h4><a href="<?= site_url('User/Project/loadProjectInfo/'.$key->ProjectID) ?>"><?= $key->Title ?></a></h4>
										<div class="item-details margin-top-10">
											<div class="detail-item"><i class="icon-material-outline-date-range"></i><?= $key->CreatedDt ?></div>
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
				<form style="margin-top: 50px" method="post" enctype="multipart/form-data" action="<?= site_url('User/User/PostReview/'.$recInfo->UserId.'/'.'1') ?>" >
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
							foreach ($recRev as $key) {
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
				<form style="margin-top: 50px" method="post" enctype="multipart/form-data" action="<?= site_url('User/User/PostComplaint/'.$recInfo->UserId.'/'.'1') ?>" >
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


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<?php include_once('footerNav.php') ?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Make an Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss your project with David</h3>
				</div>
					
				<!-- Form -->
				<form method="post">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name"/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address"/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
						<label class="uploadButton-button ripple-effect" for="upload">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>
			<!-- Login -->
			<div class="popup-tab-content" id="loginn">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss Your Project With Tom</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="make-an-offer-form">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name2" id="name2" placeholder="First and Last Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress2" id="emailaddress2" placeholder="Email Address" required/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" multiple/>
						<label class="uploadButton-button" for="upload-cv">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="make-an-offer-form">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Make an Offer Popup / End -->



<!-- Scripts
================================================== -->
<?php include_once('footerScript.php') ?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:46:01 GMT -->
</html>