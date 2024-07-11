jQuery('.hover-text').hover(function () {
    jQuery(this).text("creative").css("color", "#0000fd").fadeIn('slow');
}, function () {
    jQuery(this).text("connected").css("color", "#fff").fadeIn('slow');
});

$(document).ready(function () {
    sliderElementWidth();
    jQuery(window).on('resize', function () {
    	setTimeout(function () {
          sliderElementWidth();
    	}, 500);
    });



    
    const clocks = document.getElementsByClassName("clock");

        function updateClocks() {
          for (let clock of clocks) {
            let timezone = clock.dataset.timezone;
            let time = new Date().toLocaleTimeString("en-GB", {
              hour: '2-digit',
              minute:'2-digit',
              hour12: false,
              timeZone: timezone
            });
            clock.textContent = time;
          }
        }
    
        // Update every minute:
        setInterval(updateClocks, 50000);
        updateClocks();


    $('#contact .btn-show-office').on('click', function (e) {
        var targetDiv = $($(this).attr('href'));
       
        if (!targetDiv.is(':visible')) {
            $('.office-wrap').slideUp(1);
            targetDiv.slideDown(2);
        } 
    });

    $(".close-contact").click(function () {
        $(".contact-popup-btn").removeClass("current-menu-item"); // remove active classes
    });

    $(".contact-popup-btn, .close-contact").click(function (e) {
      e.preventDefault();
      $("#contact").slideToggle("slow");

      $("contact-popup-btn a.active").removeClass("active"); // remove active classes
      if ($(window).width() > 1024) {
          $("#collapseThree").addClass('show');
      }
      if ($("#bgvid").get(0).paused) {
          $("#bgvid").trigger('play');
          $(".play").fadeOut(500);
      } else {
          $("#bgvid").trigger('pause');
          $(".play").fadeIn(500);
      }
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() > 180) {
            $('#contact').slideUp();
            $(".contact-popup-btn").removeClass("current-menu-item"); // remove active classes
            if (jQuery("#bgvid").get(0).paused) {
                jQuery("#bgvid").trigger('play');
                jQuery(".play").fadeOut(500);
            } 
        }
    });
    

    if ($(window).width() < 1025) {
     
        var texts = ["creative", "connected"];
        var color = ["#0000fd", "#fff"];
        var customClass = ["first-element", "secondElement"];
        var count = 0;
        function changeText() {
            $(".hover-text span").text(texts[count]).css("color", color[count]).fadeIn("2000").removeClass().addClass(customClass[count]);

            count < 2 ? count++ : count = 0;
        }

        setInterval(changeText, 2000);

        $(function () {
            $('#menu-main-menu li.menu-item a').on('click', function (e) {

                var targetDiva = $('#menu-main-menu li');
                if (!targetDiva.hasClass('active')) {
                    $("#menu-main-menu li.active").removeClass("active"); // remove active classes
                    $(this).addClass("active"); // add active class to clicked element
                    $(".main-navigation").animate({ left: '-100%' });
                    $(".site-header .open-button.active").removeClass('active');
                } else {
                    $(this).removeClass("active"); // add active class to clicked element
                    $(".main-navigation").animate({ left: '0' });

                }
            });
        });

    } else {
        $(function () {
            $('#menu-main-menu li.menu-item a').on('click', function (e) {
                var targetDiva = $('#menu-main-menu li');
                if (!targetDiva.hasClass('active')) {
                    $("#menu-main-menu li.active").removeClass("active"); // remove active classes
                    $(this).addClass("active"); // add active class to clicked element
                    $(".site-header .open-button.active").removeClass('active');
                } else {
                    $(this).removeClass("active"); // add active class to clicked element
                }
            });
        });
    }
});


$(function () {
    $('.links-to-tabs a').on('click', function (e) {
        e.preventDefault();
        var targetDiv = $($(this).attr('href'));

        if (!targetDiv.is(':visible')) {
            $(".links-to-tabs a.active").removeClass("active"); // remove active classes
            $(this).addClass("active"); // add active class to clicked element
            $('.tab-content').slideUp(1);
            targetDiv.slideDown(1);

            if ($("#about .performance-marketing-el").hasClass("active")) {
                $("#what-we-do .links-to-tabs li .performance-marketing").addClass("active");
                $("#what-we-do #creative-production").removeClass("show");
                $("#what-we-do #performance-marketing").css("display", "block");

            }

            if ($("#about .content-strategy-el").hasClass("active")) {
                $("#what-we-do .links-to-tabs li .content-strategy").addClass("active");
                $("#what-we-do #creative-production").removeClass("show");
                $("#what-we-do #content-strategy").css("display", "block");
            }

            if ($("#about .global-delivery-el").hasClass("active")) {
                $("#what-we-do .links-to-tabs li .global-delivery").addClass("active");
                $("#what-we-do #creative-production").removeClass("show");
                $("#what-we-do #global-delivery").css("display", "block");
            }

            if ($("#about .creative-technology-el").hasClass("active")) {
                $("#what-we-do .links-to-tabs li .creative-technology").addClass("active");
                $("#what-we-do #creative-production").removeClass("show");
                $("#what-we-do #creative-technology").css("display", "block");
            }

            if ($("#about .creative-production-el").hasClass("active")) {
                $("#what-we-do .links-to-tabs li .creative-production").addClass("active");
                $("#what-we-do #creative-production").css("display", "block");
            }
        } else {

        }
    });

    $('#about .links-to-tabs li a').click(function () {
        $('.links-to-tabs li a').each(function () {
            $(window).scrollTop($('#what-we-do').offset().top);
        });
    });

    $('#play-video').on('hover', function (e) {
        var $video = $('#video');
        src = $video.attr('src');
        $video.attr('src', src + '?autoplay=1');
    });

    $(".site-header .open-button").click(function () {
        if ($(this).hasClass("active")) {
            // $(".main-navigation").animate({ left: '-100%' });
            $(".main-navigation").animate({
                left: "-100%"
              }, {
                duration: "slow"
              });
            $(".site-header .open-button").removeClass('active');
        } else {
            $(".site-header .open-button").addClass('active');
            // $(".main-navigation").animate({ left: '0' });
            $(".main-navigation").animate({
                left: "0"
              }, {
                duration: "slow"
              })
        }
    });

    $('header ul li').each(function () {
        $(this).removeClass('current-menu-item');
    });

    $('header ul li').click(function () {
        $('header ul li').each(function () {
            $(this).removeClass('current-menu-item');
        });
        $(this).addClass('current-menu-item');
    });



    $(".back-to-project").click(function () {
        $('.modal-video').modal('hide');
    });

    $(".what-we-do-inner-bottom-mobile button#exampleModal-1-btn").click(function () {
        $('.modal-bottom#exampleModal-1').slideToggle("slow");
        if ($(".what-we-do-inner-bottom-mobile #exampleModal-1.modal.show").hasClass("show")) {
            $('.what-we-do-inner-bottom-mobile #exampleModal-1').removeClass('show');
        } else {
            $('.what-we-do-inner-bottom-mobile #exampleModal-1').addClass('show');
        }
    });

    $(".what-we-do-inner-bottom-mobile button#exampleModal-2-btn").click(function () {
        $('.modal-bottom#exampleModal-2').slideToggle("slow");
        if ($(".what-we-do-inner-bottom-mobile #exampleModal-2.modal.show").hasClass("show")) {
            $('.what-we-do-inner-bottom-mobile #exampleModal-2').removeClass('show');
        } else {
            $('.what-we-do-inner-bottom-mobile #exampleModal-2').addClass('show');
        }
    });
    $(".what-we-do-inner-bottom-mobile button#exampleModal-3-btn").click(function () {
        $('.modal-bottom#exampleModal-3').slideToggle("slow");
        if ($(".what-we-do-inner-bottom-mobile #exampleModal-3.modal.show").hasClass("show")) {
            $('.what-we-do-inner-bottom-mobile #exampleModal-3').removeClass('show');
        } else {
            $('.what-we-do-inner-bottom-mobile #exampleModal-3').addClass('show');
        }
    });
    $(".what-we-do-inner-bottom-mobile button#exampleModal-4-btn").click(function () {
        $('.modal-bottom#exampleModal-4').slideToggle("slow");
        if ($(".what-we-do-inner-bottom-mobile #exampleModal-4.modal.show").hasClass("show")) {
            $('.what-we-do-inner-bottom-mobile #exampleModal-4').removeClass('show');
        } else {
            $('.what-we-do-inner-bottom-mobile #exampleModal-4').addClass('show');
        }
    });
    $(".what-we-do-inner-bottom-mobile button#exampleModal-5-btn").click(function () {
        $('.modal-bottom#exampleModal-5').slideToggle("slow");
        if ($(".what-we-do-inner-bottom-mobile #exampleModal-5.modal.show").hasClass("show")) {
            $('.what-we-do-inner-bottom-mobile #exampleModal-5').removeClass('show');
        } else {
            $('.what-we-do-inner-bottom-mobile #exampleModal-5').addClass('show');
        }
    });

   
});

var prev = 0;
var $window = $(window);
var nav = $('.site-header');

$window.on('scroll', function(){
  var scrollTop = $window.scrollTop();
  nav.toggleClass('hidden', scrollTop > prev);
  prev = scrollTop;
  setTimeout(function(){
      navbarActiveElement();
  }, 100);


});


function navbarActiveElement() {
    // console.log('navbarActiveElement');
    jQuery('section:not(#contact)').each(function() {
        elementTop = jQuery(this).offset().top;
        // section = jQuery(this).closest('.widget');
        sectionID = jQuery(this).attr('id');
        windowHeight = jQuery(window).height();
        // console.log(sectionID +' - element top: ' + elementTop);

        scrollTop = jQuery(window).scrollTop();
        scrollTopReal = scrollTop + 300;
        // console.log(scrollTopReal);
        if(scrollTopReal > elementTop){
            // console.log(sectionID);
            jQuery('.main-navigation .menu-item a').removeClass('active');
            jQuery('.main-navigation .menu-item').removeClass('current-menu-item');
            // jQuery('#submenu-row li[data-id="'+sectionID+'"]').addClass('active');
            jQuery('.main-navigation .menu-item a[href="#'+sectionID+'"]').addClass('active');
            jQuery('.main-navigation .menu-item a[href="#'+sectionID+'"]').closest('.menu-item').addClass('current-menu-item');
        }
    });
}

function sliderElementWidth() {
    elementWidth = jQuery('.swiper-container-clients .refference-column').width();
    jQuery('.swiper-container-clients .swiper-slide').css('width', elementWidth);
    console.log('slider element width: ' + elementWidth);
}


