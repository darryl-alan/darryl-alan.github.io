$(function () {
	$("a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		if($(this).hasClass('carousel-control')) return;

		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 700, function(){
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
					+ 	'<img class="d-block mx-auto" alt="' + e.title + '" ' +
							'src="images/' + e.file['md'] + '" ' +
							'sizes="(max-width: 400px) 360px, (max-width: 800px) 720px, 1080px" ' +
							'srcset="images/' + e.file['sm'] + ' 360w, images/' + e.file['md'] + ' 720w,' +
					'				images/' + e.file['lg'] + ' 1080w" >'
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
				"value": 135,
			},
			"size": {
				"value": 3,
				"random": true,
				"anim": {
					"enable": false,
					"speed": 25,
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
			"detect_on": "canvas",
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


	var $contactForm = $("#contact-form");

	var preventForm = true;
	$contactForm.submit(function(e) {
		var $form = $(this);
		if(!preventForm) {
			setTimeout(function(){$form.find('input, textarea').val('')}, 1000);
			$form.removeClass('was-validated').addClass('needs-validation');
			preventForm = true;
			return;
		}

		e.preventDefault();

		$form.addClass('was-validated').removeClass('needs-validation');
		if ($form[0].checkValidity() === false) {
			e.preventDefault();
			e.stopPropagation();
			return;
		}

		preventForm = false;
		$form.submit();
	});
	$contactForm.attr('novalidate', 'novalidate');
	$contactForm.addClass('needs-validation');

	if(navigator.userAgent.indexOf('Android') >= 0
		&& (/Chrome\/[.0-9]* Mobile/.test(navigator.userAgent)
			|| /Chrome\/[.0-9]* (?!Mobile)/.test(navigator.userAgent) )){
		$(".full").addClass('android-chrome');
	}
});