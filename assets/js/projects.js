$(document).ready(function () {

	// setTimeout(function () {
	// }, 100);
	// scrollEffect();



	// script for video tag

	var videoContainers = $(".video-wrapper");

	videoContainers.each(function (index) {
		var currentVideoContainer = $(this);
		var video = currentVideoContainer.find('.video');

		video.on('canplay', function () {
			currentVideoContainer.click(function () {
				// console.log("video", video);
				video.get(0).play();
			}).click(function () {
				video.get(0).pause();
			})
		});
	});

	$("#nextProjectSwitcher").on("click", function (event) {
		var currentProjectIndex = +$(this).attr("data-projectindex");
		var nextProject = $(".projects-wrapper .video-wrapper")[currentProjectIndex + 1];

		if ($(".projects-wrapper .video-wrapper").length === currentProjectIndex + 1) {
			nextProject = $(".projects-wrapper .video-wrapper")[0];
			$('#nextProjectSwitcher').attr('data-projectindex', 0);
		} else {
			$('#nextProjectSwitcher').attr('data-projectindex', currentProjectIndex + 1);
		}
		popUpFactory(nextProject);
	});

	// script for vimeo
	var videoContainers = $(".projects-wrapper .video-wrapper");
	videoContainers.each(function (index) {
		var currentVideoContainer = $(this);

		var vimeo = currentVideoContainer.find('.vimeo');

		if (vimeo.get(0)) {
			// var player = new Vimeo.Player(vimeo.get(0));
			// currentVideoContainer.click(function () {
			// 	player.play();
			// }).click(function () {
			// 	player.pause();
			// });


			currentVideoContainer.on('click', function (ev) {
				ev.preventDefault();
				$(".vimeo")[0].src += "";
			});

			currentVideoContainer.click(function (e) {
				e.preventDefault();

				$('#nextProjectSwitcher').attr('data-projectindex', index);
				popUpFactory(this);
			});

			$(function () {
				// $('#pauseVideo').click(function () {
				// 	$("iframe").each(function () {
				// 		var src = $(this).attr('src');
				// 		$(this).attr('src', src);

				// 	});
				// 	var vidActive = new Vimeo.Player($('.modal-body .slick-active iframe'));
				// 	vidActive.getPaused().then(function (paused) {
				// 		if (paused) {
				// 		} else {
				// 			vidActive.pause();
				// 		}
				// 	});
				// });
				$('#pauseVideo').click(function () {
					$("#modal_01 .projects-slick .vimeo-wrapper").remove()
				 });
			});

		}
	});

	// $(".slick-active").click(function () {
	// 	$(this).addClass('iframe-clicked');
	// });


	$("#openDetails, #openModalDetails").click(function () {
		$(".modal-footer-full").slideToggle(500);
		// console.log('vidGetPausedState: ' + vidGetPausedState);
		if ($(".modal-footer-full #openModalDetails").hasClass("active")) {
			$(".modal-footer-full #openModalDetails").removeClass('active');
			$(".modal-footer_back").removeClass('opened');
		} else {
			$(".modal-footer-full #openModalDetails").addClass('active');
			$(".modal-footer_back").addClass('opened');
		}
		///////////////////////////////////
		// pause video when it's playing //
		$(".modal-footer-full").toggleClass('modal-footer-opened');
		var vidActive = new Vimeo.Player($(this).closest('.modal-content').find('.modal-body .slick-active iframe'));

		vidActive.getCurrentTime().then(function(seconds) {
			console.log(seconds);
			if(seconds != 0){
				if ($(".modal-footer-full").hasClass("modal-footer-opened")) {
					console.log('state1');
					vidActive.getPaused().then(function (paused) {
						if (paused) {
						} else {
							vidActive.pause();
						}
					});
				} else {
					console.log('state2');
					vidActive.getPaused().then(function (paused) {
						if (paused) {
							vidActive.play();
						} else {
						}
					});
				}
			}
		});
		// end pause video when it's playing //
		///////////////////////////////////////
	});

	///////////////////////////////////
	// pause video if changing slide //
	jQuery('.projects-slick').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		console.log('change slide');
		// $('.modal-body .slick-active').addClass('test');
		var vidActive = new Vimeo.Player($('.modal-body .slick-active iframe'));
		vidActive.getPaused().then(function (paused) {
			if (paused) {
			} else {
				vidActive.pause();
			}
		});
	});
	// end pause video if changing slide //
	///////////////////////////////////////

	$('.slick-active').on('click tap',function () {
		$('.slick-active').addClass('iframe-clicked');
		console.log('slick active click');
	});


});

function popUpFactory(parentElement) {
	if ($("#modal_01 .projects-slick > div").length > 0) $("#modal_01 .projects-slick").slick("unslick");
	$("#modal_01 .projects-slick").html("");

	var modal = $("#modal_01").modal({});
	modal
			.find(".client-details_clientHeading")
			.html($(parentElement).find(".client-details_clientHeading").html());
	modal
			.find(".client-details_clientDescription")
			.html($(parentElement).find(".client-details_clientDescription").html());
	modal
			.find(".client-details_clientName")
			.html($(parentElement).find(".client-details_clientName").html());
	modal
			.find(".client-details_agency")
			.html($(parentElement).find(".client-details_agency").html());
	modal
			.find(".client-details_production")
			.html($(parentElement).find(".client-details_production").html());
	modal
			.find(".client-details_post")
			.html($(parentElement).find(".client-details_post").html());

	$(parentElement)
			.find('input[type="hidden"]')
			.each(function () {
				$("#modal_01 .projects-slick").append(
						'<div><div class="vimeo-wrapper"><iframe id="vimeo-stop" src="' + $(this).attr("data-video") + '?modestbranding=1" width="640" height="360" frameborder="0" allow="fullscreen" mozallowfullscreen webkitallowfullscreen fullscreen; picture-in-picture" allowfullscreen></iframe></div></div>'
				);
			});


	if ($('.slick-slider .slick-slide').length > 1) {
		$(".projects-slick").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			prevArrow: $('.slick-prev-custom'),
			nextArrow: $('.slick-next-custom'),
		});
	} else {
		$(".projects-slick").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			prevArrow: $('.slick-prev-custom'),
			nextArrow: $('.slick-next-custom'),
		});

	}


	// $(".projects-slick").slick("slickNext");
	// $(".projects-slick").slick("slickPrev");

}




// snap scroll in projects
// function scrollEffect() {


// 	var lastScrollTop = 0;
// 	$(window).on('scroll', function() {
// 		st = $(this).scrollTop();
// 		if(st < lastScrollTop) {
// 			// scroll up
// 				$('html, body').stop();
// 		}
// 		else {
// 			// scroll down
// 			hWindow = jQuery(window).height();
// 			posBody = jQuery('body').scrollTop();
// 			posHtml = jQuery('html').scrollTop();

// 			pos = 0;
// 			if (posBody > 0)
// 				pos = posBody
// 			if (posHtml > 0)
// 				pos = posHtml;

// 			var element;

// 			jQuery('.projects-wrapper .margin-fix').each(function () {
// 				posElement = (jQuery(this).offset().top - hWindow);
// 				centerElement = (jQuery(this).offset().top);
// 				if(pos > posElement){
// 					element = $(this);
// 					console.log(pos,posElement);
// 				}
// 			});
// 			console.log('----------------');
// 			console.log(element.attr('class'));
// 			thisCenterElement = (element.offset().top);
// 			heightElement = (element.height() / 2);
// 			$('html, body').stop().animate({
// 				scrollTop:thisCenterElement - heightElement
// 			}, 100);

// 			// pp = (pos - posElement) / hWindow;
// 			// // 0.1 -> 10% wys ekranu od dołu
// 			// hasCenterClass = element.hasClass('center-me');
// 			// if (pp >= 0.4) {
// 			// 	if(!hasCenterClass) {
// 			// 		element.addClass('center-me');
// 			// 		thisCenterElement = (element.offset().top);
// 			// 		heightElement = (element.height() / 2);
// 			// 		console.log('this center: '+thisCenterElement+' posElement: '+posElement+' heightElement: '+heightElement+' centerElement: '+centerElement);
// 			// 		setTimeout(function(){
// 			// 			$('html, body').animate({
// 			// 				scrollTop:thisCenterElement - heightElement
// 			// 			}, 100);
// 			// 		}, 300);
// 			// 		setTimeout(function(){
// 			// 			jQuery('.projects-wrapper .margin-fix').removeClass('center-me');
// 			// 		}, 1000);
// 			// 	}else {
// 			// 	}
// 			// }
// 		}
// 		lastScrollTop = st;
// 	});


// }



