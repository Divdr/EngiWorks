<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Organize and Manage">
							<li><a href="<?= site_url('User/User/loadUserReviews') ?>"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						
							<li class="active-submenu"><a href="#"><i class="icon-material-outline-business-center"></i> Projects</a>
								<ul>
									<?php 
										if($_SESSION['UTP']==1){
									?>
										<li><a href="<?= site_url('User/Project/getPostedProjects') ?>">Manage Project</a></li>
										<li><a href="<?= site_url('User/Project/loadPostProject') ?>">Post a Job</a></li>
									<?php
										}else{
									?>
										<li><a href="<?= site_url('User/Project/getPostedBids/'.$_SESSION['UID']) ?>">Manage Bids</a></li>
									<?php
										}
									?>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li><a href="<?= site_url('User/User/loadUserSetting') ?>"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="<?= site_url("User/User/logOut") ?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>