jQuery(document).ready(function() {
	jQuery(window).resize(
		function(){
			jQuery('.full-width-block').width(jQuery(window).width());
			jQuery('.full-width-block').css({"width": jQuery(window).width(), "margin-left": (jQuery(window).width()/-2), "left": "50%"});

			/*if (jQuery(window).width() > 1024) {
				var window_height = jQuery(window).height();
				var window_half = (jQuery(window).width())/2;
				var image_posts_nagative = ( jQuery('.content-holder .container').width()/2 ) - ( jQuery('.desc-wrap .span5').outerWidth() );
				var image_posts_width = window_half - image_posts_nagative;
				var header_height = jQuery('#wpadminbar').height() + jQuery('header').height();
				var content_offset = jQuery('.content-holder').offset();

				jQuery('.wrapper-left').css({"height": (window_height-header_height), "margin-left": "-"+ (image_posts_nagative + image_posts_width)+"px", "width": image_posts_width, "left": "50%"});
				jQuery('.blog-posts').css({'top': header_height, "height": (window_height-header_height)});

				var blog_posts_width = jQuery('.blog-posts').outerWidth();

				jQuery('.show-posts').click(function(event){
					event.preventDefault();
					jQuery(this).addClass('active');
					jQuery('.blog-posts').css({'left': 0});
					jQuery('.content-holder').css({'left': blog_posts_width});
					jQuery('.wrapper-left').css({'transform': 'translateX('+blog_posts_width+'px)'});
				});
				jQuery('.close-posts').click(function(event){
					event.preventDefault();
					jQuery('.show-posts').removeClass('active');
					jQuery('.blog-posts').css({'left': '-'+blog_posts_width+'px'});
					jQuery('.content-holder').css({'left': '0'});
					jQuery('.wrapper-left').css({'transform': 'translateX(0)'});
				});
			};*/

			/*if (jQuery(window).width() > 767) {
				jQuery('.same-height').children().each(function(){
					jQuery(this).css('height', 'auto')
				});
				jQuery('.same-height').each(function(){
					var block_height = jQuery(this).height();
					jQuery(this).children().css('height', block_height);
				})
			} else {
				jQuery('.same-height').children().each(function(){
					jQuery(this).css('height', 'auto')
				});
			};*/
		}
	).trigger('resize');

	/*if (jQuery(window).width() > 1024) {
		var blog_posts_width = jQuery('.blog-posts').outerWidth();
		var header_height_resp = jQuery('#wpadminbar').height() + jQuery('header').height();
		var content_height = jQuery('.content-holder').height(); 

		/* For Header */
		/*jQuery('.content-holder').waypoint(function(direction) {
			if (direction === 'down') {
				jQuery('.wrapper-left').addClass('fixed').css({'top': header_height_resp});
				jQuery('.show-posts').css({'opacity': '1'});
			}
		}, { offset: (0+header_height_resp) })
		.waypoint(function(direction) {
			if (direction === 'up') {
				jQuery('.wrapper-left').removeClass('fixed').css({'top': 0, 'transform': 'translateX(0)'});
				jQuery('.show-posts').removeClass('active').css({'opacity': '0'});
				jQuery('.content-holder').css({'left': '0'});
				jQuery('.blog-posts').css({'left': '-'+blog_posts_width+'px'});
			}
		}, { offset: (0+header_height_resp) });	*/

		/* For Footer */
		/*jQuery('.content-holder').waypoint(function(direction) {
			if (direction === 'down') {
				jQuery('.wrapper-left').removeClass('fixed').css({'transform': 'translateX(0)', 'top': 'auto', 'bottom': '0'});
				jQuery('.show-posts').removeClass('active').css({'opacity': '0'});
				jQuery('.content-holder').css({'left': '0'});
				jQuery('.blog-posts').css({'left': '-'+blog_posts_width+'px'});
			}
		}, { offset: 'bottom-in-view' })
		.waypoint(function(direction) {
			if (direction === 'up') {
				jQuery('.wrapper-left').addClass('fixed').css({'bottom': 'auto', 'top': header_height_resp});
				jQuery('.show-posts').css({'opacity': '1'});
			}
		}, { offset: 'bottom-in-view' });*/

        jQuery.fn.waypoint.defaults = {
            context: window,
            continuous: true,
            enabled: true,
            horizontal: false,
            offset: '80%',
            triggerOnce: true
        };
        if (!jQuery('html').hasClass('ie8') && !jQuery('html').hasClass('ie9')) {
            jQuery('.tofade,.toflip,.tofadel,.tofader').css('opacity', 0);
            jQuery('.tofade').waypoint(function (g) {
                if (g == 'down') {
                    jQuery(this).removeClass('animated fadeOutDown').addClass('animated fadeInUp');
                } else {
                    jQuery(this).removeClass('animated fadeInUp').addClass('animated fadeOutDown');
                }
            });
            jQuery('.toflip').waypoint(function (g) {
                if (g == 'down') {
                    jQuery(this).removeClass('animated fadeOutDown').addClass('animated flipInY');
                } else {
                    jQuery(this).removeClass('animated flipInY').addClass('animated fadeOutDown');
                }
            });
            jQuery('.tofadel').waypoint(function (g) {
                if (g == 'down') {
                    jQuery(this).removeClass('animated fadeOutLeft').addClass('animated fadeInLeft');
                } else {
                    jQuery(this).removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                }
            });
            jQuery('.tofader').waypoint(function (g) {
                if (g == 'down') {
                    jQuery(this).removeClass('animated fadeOutRight').addClass('animated fadeInRight');
                } else {
                    jQuery(this).removeClass('animated fadeInRight').addClass('animated fadeOutRight');
                }
            });
        }

	jQuery(".statistics .number").counterUp({
		delay: 10, 
		time: 1000 
	});

	jQuery('.posts-grid.showcase').wrapAll('<div class="showcase-wrap"></div>');
	jQuery('.showcase-wrap').prepend('<div class="image-wrap"></div>');

	var i = 1;
	jQuery('.posts-grid.showcase li').each(function(){
		jQuery(this).attr('item', 'item-'+i).find('.thumbnail').clone().appendTo('.showcase-wrap .image-wrap').attr('item', 'item-'+i);
		i++;
	});
	
	jQuery('.showcase-wrap').find('[item="item-1"]').addClass('active');

	jQuery('.posts-grid.showcase li').hover(function(){
		jQuery('.showcase-wrap .image-wrap .thumbnail').removeClass('active');

		var hovered_item = jQuery(this).attr('item');
		jQuery('.showcase-wrap .image-wrap').find('[item="'+hovered_item+'"]').addClass('active');
	})

	var header_height = jQuery('.nav-wrap').outerHeight();
	jQuery('.content-holder .hashAncor').css('top', '-'+header_height+'px');

	jQuery('.advantages li .thumbnail').hover(function(){
		jQuery('.advantages li').removeClass('active');
		jQuery(this).parent().addClass('active');
	});
})