$(document).ready(function(){

	$('.slider-active').owlCarousel({
		loop:true,
		nav:true,
		autoplay:true,
		// animateIn:'fadeIn',
		// animateOut:'fadeOut',
		responsive:{
			360:{
				items:1
			},
			768:{
				items:1
			},
			980:{
				items:1
			}
		}
	})
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
		"use strict";
		window.addEventListener("load", function() {
		var form = document.getElementById("needs-validation");
		form.addEventListener("submit", function(event) {
		if (form.checkValidity() == false) {
		event.preventDefault();
		event.stopPropagation();
		}
		form.classList.add("was-validated");
		}, false);
		}, false);
		}());

