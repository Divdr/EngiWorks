<header id="header-container" class="fullwidth">

		<!-- Header -->
		<div id="header">
			<div class="container">
				
				<!-- Left Side Content -->
				<div class="left-side">
					
					<!-- Logo -->
					<div id="logo">
						<a href="index.html"><img src="<?= base_url() ?>resources/user/images/logo.png" alt=""></a>
					</div>

					<!-- Main Navigation -->
					<?php
						if(isset($_SESSION['UID'])){
					?>

					<nav id="navigation">
						<ul id="responsive">

							<li><a href="<?= site_url("User/Home") ?>" class="current">Home</a>
							</li>

							<?php
								if($_SESSION['UTP']==1){
							?>
								<li><a href="#">Projects</a>
									<ul class="dropdown-nav">
										<li><a href="<?= site_url('User/Project') ?>">Browse Projects</a></li>
										<li><a href="<?= site_url('User/Project/loadPostProject') ?>">Add Project</a></li>
									</ul>
								</li>
							<?php
								}if($_SESSION['UTP']==2){
							?>
									<li><a href="<?= site_url('User/Project') ?>">Projects</a></li>
							<?php
								}
							?>
							<li><a href="<?= site_url('User/Recruter') ?>">Recruters</a></li>
							<li><a href="<?= site_url('User/Engineer') ?>">Engineers</a></li>

						</ul>
					</nav>
					<div class="clearfix"></div>
					<?php
						}
					?>
					<!-- Main Navigation / End -->
					
				</div>
				<!-- Left Side Content / End -->


				<!-- Right Side Content / End -->
				<div class="right-side">

					
					<!--  User Notifications / End -->

					<!-- User Menu -->
					<div class="header-widget">

						<?php
							if(isset($_SESSION['UID'])){
						?>
						<!-- Messages -->
						<div class="header-notifications user-menu">
							<div class="header-notifications-trigger">
								<a href="#"><div class="user-avatar status-online"><img class="img-fluid" height="50px" width="50px" src="<?= base_url() ?>resources/user/images/UserProfile/<?= $_SESSION['ProPic'] ?>" alt=""></div></a>
							</div>

							<!-- Dropdown -->
							<div class="header-notifications-dropdown">

								<!-- User Status -->
								<div class="user-status">

									<!-- User Name / Avatar -->
									<div class="user-details">
										<div class="user-avatar status-online"><img class="img-fluid" height="50px" width="50px" src="<?= base_url() ?>resources/user/images/UserProfile/<?= $_SESSION['ProPic'] ?>" alt=""></div>
										<div class="user-name">
											<?= $_SESSION['UName'] ?>	
											<span>
												<?php
													if($_SESSION['UTP']==1){
												?>
														Recruter
												<?php
													}
													if($_SESSION['UTP']==2){
												?>
														Engineer
												<?php
													}
												?>
											</span>
										</div>
									</div>
									
								</div>
								
								<ul class="user-menu-small-nav">
									<li><a href="<?= site_url('User/Project/getPostedProjects') ?>"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
									<li><a href="<?= site_url('User/User/loadUserSetting') ?>"><i class="icon-material-outline-settings"></i> Settings</a></li>
									<li><a href="<?= site_url("User/User/logOut") ?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
								</ul>

							</div>
						</div>

						<?php
							}
						?>

					</div>
					<!-- User Menu / End -->

					<!-- Mobile Navigation Button -->
					<span class="mmenu-trigger">
						<button class="hamburger hamburger--collapse" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</span>

				</div>
				<!-- Right Side Content / End -->

			</div>
		</div>
		<!-- Header / End -->

	</header>