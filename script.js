$(function () {
	$("a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		if($(this).hasClass('carousel-control')) return;

		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 600, function(){
			window.location.hash = hash;
		});

	});

	$(window).on('activate.bs.scrollspy', function (e,obj) {
		if(history.replaceState) {
			history.replaceState(null, null, obj.relatedTarget);
		}
	});

	particlesJS("particles-js", {
		"particles": {
			"number": {
				"value": 150,
			},
			"size": {
				"value": 3,
				"random": true,
				"anim": {
					"enable": false,
					"speed": 30,
					"size_min": 0.1,
					"sync": false
				}
			},
			"line_linked": {
				"enable": true,
				"distance": 160,
				"color": "#ffffff",
				"opacity": 0.8,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 4,
			}
		},
		"interactivity": {
			"detect_on": "window",
			"events": {
				"onhover": {
					"enable": true,
					"mode": "grab"
				},
				"onclick": {
					"enable": true,
					"mode": "push"
				},
				"resize": true
			},
		},
		"retina_detect": true
	});
});