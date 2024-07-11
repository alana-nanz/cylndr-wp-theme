<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mint-new
 */

?>

<section id="contact" class="">
    <div class="contact-desktop">
        <?php get_template_part('offices/contact-desktop-main'); ?>

    </div>
    <div class="contact-mobile">
        <?php get_template_part('offices/mobile-offices'); ?>
    </div>
</section>

<footer id="colophon" class="site-footer">
    <div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- Cheil logos -->
				<?php get_template_part('template-parts/our-global-family'); ?>
            
        <?php the_field('footer_content', 'option'); ?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>

$(document).ready(function () {
    


    var officesLocation = [
        {
            id: "seoul",
            latitude: "37.5478",
            longitude: "127.0460"
        },
        {
            id: "durham",
            latitude: "35.9927",
            longitude: "-78.9050"
        },
        {
            id: "bucharest",
            latitude: "44.4159",
            longitude: "26.1013"
        },
        {
            id: "new-york",
            latitude: "40.7127",
            longitude: "-74.0059"
        },
        {
            id: "london",
            latitude: "51.5050",
            longitude: "-0.1000"
        },
        {
            id: "dallas",
            latitude: "33.0609",
            longitude: "-96.6971"
        },
        {
            id: "santiago",
            latitude: "-33.4039",
            longitude: "-70.5703"
        },
        {
            id: "los-angeles",
            latitude: "34.0329",
            longitude: "-118.3333"
        },
    ];



    function getDistance(lat1, lon1, lat2, lon2) {
        var R = 6371;
        var dLat = toRad(lat2 - lat1);
        var dLon = toRad(lon2 - lon1);
        var lat1 = toRad(lat1);
        var lat2 = toRad(lat2);

        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1) * Math.cos(lat2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        var d = R * c;
        return d;
    }

    function toRad(Value) {
        return Value * Math.PI / 180;
    }

    getIPs().then(function (res) {
        var clientIP = res.join('\n');

        $.get('//ipinfo.io/' + clientIP + '/geo', function (data) {
            var clientLocation = data.loc.split(',');
            var clientLatitude = clientLocation[0];
            var clientLongitude = clientLocation[1];

            var closestOffice = { id: "", distance: Number.MAX_SAFE_INTEGER };
            officesLocation.forEach(function (office) {
                var officeDistance = getDistance(clientLatitude, clientLongitude, office.latitude, office.longitude);
                if (officeDistance < closestOffice.distance) {
                    closestOffice = {
                        id: office.id,
                        distance: officeDistance
                    };
                }
            });

            if ($(window).width() < 1024) {
                $('.office-wrap').each(function () {
                    if ($(this).attr('id') === closestOffice.id) {
                        $(this).slideDown(1);
                    } else {
                        $(this).slideUp(1);
                    }
                });
            } else {
                $('.office-wrap').each(function () {
                    if ($(this).attr('id') === closestOffice.id) {
                        $(this).slideDown(1);
                    } else {
                        $(this).slideUp(1);
                    }
                });
            }
        });
    })

});



$(document).ready(function(){
   
/* Sample function that returns boolean in case the browser is Internet Explorer*/
    function isIE() {
    ua = navigator.userAgent;
    /* MSIE used to detect old browsers and Trident used to newer ones*/
    var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
    
    return is_ie; 
    }
    /* Create an alert to show if the browser is IE or not */
    if (isIE()){
        $('#london').css('display', 'block');

    }
            
 }); 

 document.addEventListener("DOMContentLoaded", function() {
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

});

$('.swiper-about .swiper-wrapper').slick({
        dots: true,
        arrows: true,
        infinite: true,
        swipe: true,
        touchMove: true,
        draggable: true,
        swipeToSlide: true,
        speed: 500,
        fade: true,
        prevArrow: (' <div class="swiper-button-prev-slick"></div>'),
        nextArrow: ('<div class="swiper-button-next-slick"></div>'),
        cssEase: 'linear'
    });


</script>

<script type="text/javascript">


   
        var requestUrl = "//ip-api.com/json";

        $.ajax({
        url: requestUrl,
        type: 'GET',
        success: function(json)
        {
            
            if (json.country == 'Poland') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"pl");
            } else if( json.country == 'United Kingdom') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"uk");
            } else if( json.country == 'Korea, Republic of') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"hq");
            } else if( json.country == 'United States') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"us");
            } else if( json.country == 'Canada') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ca");
            } else if( json.country == 'Ghana') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"gh");
            } else if( json.country == 'Keyna') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ke");
            } else if( json.country == 'Nigeria') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ng");
            } else if( json.country == 'South Africa') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"za");
            } else if( json.country == 'Australia') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"au");
            } else if( json.country == 'India') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"in");
            } else if( json.country == 'Indonesia') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"id");
            } else if( json.country == 'Japan') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"jp");
            } else if( json.country == 'Malaysia') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"my");
            } else if( json.country == 'Philippines') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ph");
            } else if( json.country == 'Singapore') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"sg");
            } else if( json.country == 'Thailand') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"th");
            } else if( json.country == 'Viet Nam') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"vn");
            } else if( json.country == 'Kazakhstan') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"kz");
            } else if( json.country == 'Russian Federation') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ru");
            } else if( json.country == 'Ukraine') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ua");
            } else if( json.country == 'Austria') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"at");
            } else if( json.country == 'Belgium') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"bg");
            } else if( json.country == 'Czech Republic') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"cz");
            } else if( json.country == 'France') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"fr");
            } else if( json.country == 'Germany') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"de");
            } else if( json.country == 'Italy') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"it");
            } else if( json.country == 'Netherlands') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"nl"); 
            } else if( json.country == 'Spain') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"es");   
            } else if( json.country == 'Sweden') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"sw");    
            } else if( json.country == 'Argentina') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ar");     
            } else if( json.country == 'Brazil') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"br"); 
            } else if( json.country == 'Chile') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"cl"); 
            } else if( json.country == 'Colombia') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"co");  
            } else if( json.country == 'Guatemala') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"gt");    
            } else if( json.country == 'Mexico') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"mx");                 
            } else if( json.country == 'Peru') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"pe");    
            } else if( json.country == 'Panama') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"pa");    
            } else if( json.country == 'Jordan') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"jo");    
            } else if( json.country == 'Saudi Arabia') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"sa");    
            } else if( json.country == 'Turkey') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"tr");    
            } else if( json.country == 'United Arab Emirates') {
                $(".swiper-container-family a[href*='cheil']").attr("href", $(".swiper-container-family a[href*='cheil']").attr("href")+"ae");    
            } else {
                // nothing
            }
      
            
        },
        error: function(err)
        {
            console.log("Request failed, error= " + err);
        }
        });
   
// });


</script>

</body>

</html>
