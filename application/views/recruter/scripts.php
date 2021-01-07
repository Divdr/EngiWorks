<link rel="stylesheet" href="<?php echo base_url("resources/user/") ?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url("resources/user/") ?>css/colors/blue.css">




<!-- Scripts
================================================== -->
<script src="<?php echo base_url("resources/user/") ?>js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/jquery-migrate-3.1.0.min.html"></script>
<script src="<?php echo base_url("resources/user/") ?>js/mmenu.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/tippy.all.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/simplebar.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/snackbar.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/clipboard.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/counterup.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/magnific-popup.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/slick.min.js"></script>
<script src="<?php echo base_url("resources/user/") ?>js/custom.js"></script>


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
