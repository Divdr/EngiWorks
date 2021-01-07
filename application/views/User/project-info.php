<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/single-task-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:45:40 GMT -->
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
<div class="single-page-header" data-background-image="images/single-task.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-details">
							<h3 style="font-weight: 600"><?= $prj->Title ?></h3>
							<h5>About the Employer</h5>
							<ul>
								<li><a href="<?= site_url('User/User/loadUserInfo/'.$prj->UserID) ?>"><i class="icon-material-outline-account-circle"></i><?= $prj->Username ?></a></li>

								<li><a href="#"><i class="icon-material-outline-email"></i><?= $prj->UserEmail ?></a></li>
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Project Budget</div>
							<div class="salary-amount"><?= $prj->Rate ?> Rs.</div>
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
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Description -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Project Description</h3>
				<p><?= $prj->Description ?></p>
			</div>

			<!-- Atachments -->
			<div class="single-page-section">
				<h3>Attachments</h3>
				<div class="attachments-container">
					<a href="<?= base_url() ?>resources/user/pdf/<?= $prj->Document ?>" target="_blank" class="attachment-box ripple-effect"><span>Project Brief</span><i>PDF</i></a>
				</div>
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-25">Project Detail</h3>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<li>Starting Date : <code><?= $prj->StartingDate ?></code></li>
							<li>Ending Date : <code><?= $prj->EndingDate ?></code></li>
							<li>No.Of Hrs/d : <code><?= $prj->NoOfHoursPerDay ?></code></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>Category : <code><?= $prj->CategoryName ?></code></li>
							<li>Sub-CategoryName : <code><?= $prj->SubCatName ?></code></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

			<?php
				$val=$this->pm->checkProjectStatus($prj->ProjectID);
				if($val) {
			?>
			
					<!-- Freelancers Bidding -->
					<div class="boxed-list margin-bottom-60">
						<div class="boxed-list-headline">
							<h3>
								<i class="icon-material-outline-group"></i> 
									Engineers Bidding 
									<?php
										if($_SESSION['UTP']==1 && $prj->UserID==$_SESSION['UID']){
									?>
										<span style="float: right;"><a href="<?= site_url('User/Project/loadManageBidder/'.$prj->ProjectID) ?>" class="btn btn-info">Manage Bidder</a></span>
									<?php 
										} 
									?>
							</h3>
						</div>
						
						<ul class="boxed-list-ul">
							<?php
								
								foreach ($pbid as $key) {
							?>
									<li>
										<div class="bid">
											<!-- Avatar -->
											<div class="bids-avatar">
												<div class="freelancer-avatar">
													<a href="<?= site_url('User/User/loadUserInfo/'.$key->UserID) ?>"><img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $key->ProfilePic ?>" alt=""></a>
												</div>
											</div>
											
											<!-- Content -->
											<div class="bids-content">
												<!-- Name -->
												<div class="freelancer-name">
													<h4><a href="<?= site_url('User/User/loadUserInfo/'.$key->UserID) ?>"><?= $key->Username ?></a></h4>
												</div>
											</div>
											
											<!-- Bid -->
											<div class="bids-bid">
												<div class="bid-rate">
													<div class="rate">Rs. <?= $key->BidAmount ?></div>
												</div>
											</div>
										</div>
									</li>
							<?php
								}
							?>
						</ul>
					</div>
			<?php
				}else{
					$data=$this->pm->getProjectWorkerInfo($prj->ProjectID);
			?>
					<div class="boxed-list margin-bottom-60">
						<div class="boxed-list-headline">
							<h3>
								<i class="icon-material-outline-group"></i> 
									Working Engineer Info
							</h3>
						</div>
						
						<ul class="boxed-list-ul">
							<li>
								<div class="bid">
									<!-- Avatar -->
									<div class="bids-avatar">
										<div class="freelancer-avatar">
											<a href="<?= site_url('User/User/loadUserInfo/'.$data->UserID) ?>"><img src="<?= base_url() ?>resources/user/images/UserProfile/<?= $data->ProfilePic ?>" alt=""></a>
										</div>
									</div>
									
									<!-- Content -->
									<div class="bids-content">
										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="<?= site_url('User/User/loadUserInfo/'.$data->UserID) ?>"><?= $data->Username ?></a></h4>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
			<?php
				}
			?>

		</div>
		
		<?php
			if($_SESSION['UTP']==2){
				$val=$this->pm->checkProjectStatus($prj->ProjectID);
				if($val) {
		?>
					<!-- Sidebar -->
					<div class="col-xl-4 col-lg-4">
						<div class="sidebar-container">


							<div class="sidebar-widget">
								<div class="bidding-widget">
									<div class="bidding-headline"><h3>Bid on this Project!</h3></div>
									<form method="post" action="<?= site_url('User/Project/postBid/'.$prj->ProjectID) ?>">

										<div class="bidding-inner">

											<!-- Headline -->
											<span class="bidding-detail">Set your <strong>minimal rate</strong></span>

											<!-- Price Slider -->
											<div class="bidding-value">Rs. <span id="biddingVal"></span></div>
											<input class="bidding-slider" name="txtBidRate" type="text" value="" data-slider-handle="custom"  data-slider-min="2500" data-slider-max="<?= $prj->Rate ?>" data-slider-value="auto" data-slider-step="60" data-slider-tooltip="hide" />
											
											<!-- Headline -->
											<span class="bidding-detail margin-top-30">Put Your <strong>Description</strong></span>

											<!-- Fields -->
											<div class="bidding-fields">
												<textarea class="form-control" placeholder="Enter Description" name="txtDesc"></textarea>
											</div>

											<!-- Button -->
											<input type="submit" value="Place a Bid" id="snackbar-place-bid" class="button ripple-effect move-on-hover full-width margin-top-30">

										</div>
									</form>
								</div>
							</div>

							<!-- Sidebar Widget -->
							

						</div>
					</div>
		<?php
				}
			}
		?>

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<?php include_once('footerScript.php') ?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<?php include_once('footerNav.php') ?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/single-task-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 09:45:41 GMT -->
</html>