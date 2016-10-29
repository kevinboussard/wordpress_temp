
function main() {

(function () {
   'use strict';
   
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });


    // skills chart
    $(document).ready(function(e) {
        //var windowBottom = $(window).height();
        var index=0;
        $(document).scroll(function(){
            var top = $('#skills').height()-$(window).scrollTop();
            if(top < (-1700)){
                if(index==0){

                    $('.chart').addClass("chart-animation");

                }
                index++;
            }
        });
    });

  	// Portfolio isotope filter
    $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
	
	  	
    // CounterUp
	$(document).ready(function( $ ) {
		if($("span.count").length > 0){	
			$('span.count').counterUp({
					delay: 10, // the delay time in ms
			time: 1500 // the speed time in ms
			});
		}
	});

  	/* Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});*/

    $(document).ready(function( $ ) {

        $('.show-btn').on('click', function () {
            $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });

        $('.card-reveal .close').on('click', function() {
            $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });

    });

}());


}
main();
