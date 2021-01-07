<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-post-a-task.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:11:16 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once("scripts.php") ?>
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once("header.php");?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Task</h3>

				<!-- Breadcrumbs -->
			</div>
	
			<!-- Row -->
			<form method="Post" enctype="multipart/form-data" action="<?= site_url("recruter/RecruterAddTask/PostTask")?>">
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Task Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Project Name</h5>
										<input type="text" class="with-border" placeholder="e.g. build me a website" name="PName">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Starting Date</h5>
										<input type="date" class="with-border" placeholder="e.g. build me a website" name="PSdate">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Ending Date</h5>
										<input type="date" class="with-border" placeholder="e.g. build me a website" name="PEdate">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Duration</h5>
										<input type="number" class="with-border" placeholder="Duration"
										name="Duration">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Status</h5>
										<input type="text" class="with-border" placeholder="Please Enter Status 1 or 0" name="Status">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Working Hours</h5>
										<input type="number" class="with-border" placeholder="Enter Time" name="WHours">
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What is your estimated budget?</h5>
										<div class="row">

											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" type="text" placeholder="Budget" name="Budget">
													<i class="currency">IND</i>
												</div>
											</div>
										</div>
										<div class="feedback-yes-no margin-top-0">
											<div class="radio">
												<input id="radio-1" name="radio" type="radio" checked>
												<label for="radio-1"><span class="radio-label"></span> Fixed Price Project</label>
											</div>

											<div class="radio">
												<input id="radio-2" name="radio" type="radio">
												<label for="radio-2"><span class="radio-label"></span> Hourly Project</label>
											</div>
										</div>
									</div>
								</div>

								
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Describe Your Project</h5>
										<textarea cols="30" rows="5" class="with-border" name="URL"></textarea>
										<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" name="ProtDtls" multiple/>
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your project</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<button class="button ripple-effect big margin-top-30" type="submit"><i class="icon-feather-plus"></i> Post a Task</button>
				</div>

			</div>

			</form>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<?php include_once("footer.php")?>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php include_once("scripts.php") ?>
<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/dashboard-post-a-task.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:11:16 GMT -->
</html>