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
								<li><a href="<?= site_url("recruter/RecruterHome/master/")?>">Home 1</a></li>
								<li><a href="index-3.php">Home 2</a></li>
								<li><a href="index-4.php">Home 3</a></li>
							</ul>
						</li>

						<li><a href="#">Find Work</a>
							<ul class="dropdown-nav">
								<li><a href="#">Browse Jobs</a>
									<ul class="dropdown-nav">
										<li><a href="jobs-list-layout-full-page-map.php">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map.php">Full Page Grid + Map</a></li>
										<li><a href="jobs-grid-layout-full-page.php">Full Page Grid</a></li>
										<li><a href="jobs-list-layout-1.php">List Layout 1</a></li>
										<li><a href="jobs-list-layout-2.php">List Layout 2</a></li>
										<li><a href="jobs-grid-layout.php">Grid Layout</a></li>
									</ul>
								</li>
								<li><a href="#">Browse Tasks</a>
									<ul class="dropdown-nav">
										<li><a href="tasks-list-layout-1.php">List Layout 1</a></li>
										<li><a href="tasks-list-layout-2.php">List Layout 2</a></li>
										<li><a href="tasks-grid-layout.php">Grid Layout</a></li>
										<li><a href="tasks-grid-layout-full-page.php">Full Page Grid</a></li>
									</ul>
								</li>
								<li><a href="browse-companies.php">Browse Companies</a></li>
								<li><a href="single-job-page.php">Job Page</a></li>
								<li><a href="single-task-page.php">Task Page</a></li>
								<li><a href="single-company-profile.php">Company Profile</a></li>
							</ul>
						</li>

						<li><a href="#">For Employers</a>
							<ul class="dropdown-nav">
								<li><a href="#">Find a Freelancer</a>
									<ul class="dropdown-nav">
										<li><a href="<?= site_url("user/FindEngineers/index/");?>">Full Page Grid</a></li>
										<li><a href="freelancers-grid-layout.php">Grid Layout</a></li>
										<li><a href="freelancers-list-layout-1.php">List Layout 1</a></li>
										<li><a href="freelancers-list-layout-2.php">List Layout 2</a></li>
									</ul>
								</li>
								<li><a href="single-freelancer-profile.php">Freelancer Profile</a></li>
								<li><a href="dashboard-post-a-job.php">Post a Job</a></li>
								<li><a href="<?= site_url("recruter/RecruterAddTask/PostTaskPage/")?>">Post a Task</a></li>
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
										<li><a href="<?= site_url("recruter/RecruterAddTask/PostTask")?>">Post a Task</a></li>
									</ul>
								</li>
								<li><a href="dashboard-settings.php">Settings</a></li>
							</ul>
						</li>

						<li><a href="#">Pages</a>
							<ul class="dropdown-nav">
								<li>
									<a href="#">Open Street Map</a>
									<ul class="dropdown-nav">
										<li><a href="jobs-list-layout-full-page-map-OpenStreetMap.php">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map-OpenStreetMap.php">Full Page Grid + Map</a></li>
										<li><a href="single-job-page-OpenStreetMap.php">Job Page</a></li>
										<li><a href="single-company-profile-OpenStreetMap.php">Company Profile</a></li>
										<li><a href="pages-contact-OpenStreetMap.php">Contact</a></li>
										<li><a href="jobs-list-layout-1-OpenStreetMap.php">Location Autocomplete</a></li>
									</ul>
								</li>
								<li><a href="pages-blog.php">Blog</a></li>
								<li><a href="pages-pricing-plans.php">Pricing Plans</a></li>
								<li><a href="pages-checkout-page.php">Checkout Page</a></li>
								<li><a href="pages-invoice-template.php">Invoice Template</a></li>
								<li><a href="pages-user-interface-elements.php">User Interface Elements</a></li>
								<li><a href="pages-icons-cheatsheet.php">Icons Cheatsheet</a></li>
								<li><a href="pages-login.php">Login & Register</a></li>
								<li><a href="pages-404.php">404 Page</a></li>
								<li><a href="pages-contact.php">Contact</a></li>
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
							<a href="#"><div class="user-avatar "><img style="height: 45px;width:100px" src="<?php echo base_url()."resources/user/images/recruterprofile/".$_SESSION['RecruterPic'] ?>"></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div ><img style="height: 100px;width:100px" src="<?php echo base_url()."resources/user/images/recruterprofile/".$_SESSION['RecruterPic']?>"></div>
									<div class="user-name">
										<?= $_SESSION['RecruterName']?> <span>Freelancer</span>
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
							<li><a href="dashboard-settings.php"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="<?= site_url("recruter/RecruterLogin/RecruterLogout/")?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
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