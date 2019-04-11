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

	$("#portfolio .card-body a").on('click', function(e){
		e.preventDefault();
		var $target = $(e.target);
		try {
			var gallery = JSON.parse($target.attr('data-gallery'));

			$("#modalTitle").html($target.closest('.card-body').find('.card-title').html());
			var list = gallery.map(function(e, i){
				return '<li data-target="#carousel" data-slide-to="' + i + '" ' + (i == 0? 'class="active"' : '') + '></li>';
			});

			$("#carousel .carousel-indicators").html(list);

			var imgs = gallery.map(function(e, i){
				return '<div class="carousel-item ' + (i == 0? 'active' : '') + '">'
					+ '<a href="images/' + e.file['full'] + '">'
					+ 	'<img src="images/' + e.file['1x'] + '" srcset="images/' + e.file['2x'] + ' 2x" class="d-block w-100" alt="' + e.title + '">'
					+ '</a>'
					+ '<div class="carousel-caption d-none d-md-block">'
					+ ' <h5>' + e.title + '</h5>'
					+ '<p>' + e.description + '</p>'
					+ '</div>'
				+ '</div>';
			});

			$("#carousel .carousel-inner").html(imgs);

			$("#modal").modal('show');
		}
		catch(ex){
			console.log(ex);
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