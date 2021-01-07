<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index-2.php"><img src="<?php echo base_url("resources/user/") ?>images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="#" class="current">Home</a>
							<ul class="dropdown-nav">
								<li><a href="<?= site_url("user/EngiProfiles/DisplayEngineers/")?>">Display Engineers Profile</a></li>
								<li><a href="<?= site_url("user/EngiProfiles/")?>">Home 1</a></li>
								<li><a href="<?= site_url("user/UserComplain/ComplainPage/")?>">Complain</a></li>
								<li><a href="index-4.php">Home 3</a></li>
							</ul>
						</li>

						<li><a href="#">Find Work</a>
							<ul class="dropdown-nav">
								
								<li><a href="<?= site_url("user/EngiJobPage/displaycompanies/")?>">Browse Companies</a></li>
								<li><a href="single-job-page.php">Job Page</a></li>
								<li><a href="single-task-page.php">Task Page</a></li>
								
							</ul>
						</li>

						

						<li><a href="#">Dashboard</a>
							<ul class="dropdown-nav">
								<li><a href="dashboard.php">Dashboard</a></li>
								<li><a href="dashboard-messages.php">Messages</a></li>
								<li><a href="dashboard-bookmarks.php">Bookmarks</a></li>
								<li><a href="dashboard-reviews.php">Reviews</a></li>
								<li><a href="dashboard-manage-jobs.php">Jobs</a>
									<ul class="dropdown-nav">
										<li><a href="dashboard-manage-jobs.php">Manage Jobs</a></li>
										<li><a href="dashboard-manage-candidates.php">Manage Candidates</a></li>
										<li><a href="dashboard-post-a-job.php">Post a Job</a></li>
									</ul>
								</li>
								<li><a href="dashboard-manage-tasks.php">Tasks</a>
									<ul class="dropdown-nav">
										<li><a href="dashboard-manage-tasks.php">Manage Tasks</a></li>
										<li><a href="dashboard-manage-bidders.php">Manage Bidders</a></li>
										<li><a href="dashboard-my-active-bids.php">My Active Bids</a></li>
										<li><a href="dashboard-post-a-task.php">Post a Task</a></li>
									</ul>
								</li>
								<li><a href="<?= site_url("user/EngiProfiles/intoupdate/")?>">Settings</a></li>
							</ul>
						</li>

						

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu-small-nav">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar "><img style="height: 45px;width:100px" src="<?php echo base_url()."resources/user/images/userprofilespics/".$_SESSION['profilepic'] ?>"></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div ><img style="height: 100px;width:100px" src="<?php echo base_url()."resources/user/images/userprofilespics/".$_SESSION['profilepic'] ?>"></div>
									<div class="user-name">
										<?= $_SESSION['email']?> <span>Freelancer</span>
									</div>
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="dashboard.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li>
			<a href="<?= site_url("user/EngiProfiles/LoadUpdateName")?>"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="<?= site_url("user/UserLogin/ulogout/")?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

						</div>
					</div>

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