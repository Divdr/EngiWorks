
<script src="<?= base_url() ?>resources/user/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/jquery-migrate-3.1.0.min.html"></script>
<script src="<?= base_url() ?>resources/user/js/mmenu.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/tippy.all.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/simplebar.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/bootstrap-slider.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/snackbar.js"></script>
<script src="<?= base_url() ?>resources/user/js/clipboard.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/counterup.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/magnific-popup.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/slick.min.js"></script>
<script src="<?= base_url() ?>resources/user/js/custom.js"></script>
<script src="<?= base_url() ?>resources/user/js/chart.min.js"></script>

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

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
	Snackbar.show({
		text: 'Copied to clipboard!',
	}); 
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
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
		setTimeout(function(){ 
			$(".pac-container").prependTo(".intro-search-field.with-autocomplete");
		}, 300);
	}

</script>

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

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>