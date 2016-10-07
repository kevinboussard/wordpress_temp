jQuery(document).ready(function(jQuery) {
	//btn-from-top, btn-from-bottom, btn-from-left, btn-from-right, btn-from-center-vertical, btn-from-center-horizontal, btn-to-center-vertical, btn-to-center-horizontal, btn-from-center-in-sides, btn-only-text-line-from-left, btn-only-text-two-lines-from-left
	var btn_hover = 'btn-from-top';

	jQuery("a.btn-primary, a.btn-default, .reply a").each(function(){
		var btn_text = jQuery(this).text();
		var btn_html = jQuery(this).html();
		jQuery(this).addClass(btn_hover).empty().append('<span data-hover="'+btn_text+'">'+btn_html+'</span>');
	});
	jQuery(".reply a").each(function(){
		jQuery(this).addClass('btn');
	});
	jQuery('input[type="submit"], input[type="reset"]').each(function(){
		if(!jQuery(this).hasClass('adminbar-button') && !jQuery(this).hasClass('search-form_is')) {
			jQuery(this).wrap('<span class="input-btn btn '+btn_hover+'"><span></span></span>').removeClass('btn').removeClass('btn-primary');
		};
	});

});
