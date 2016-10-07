jQuery(document).ready(function(){

	var
		_window = jQuery(window)
	;

	jQuery('.toTopBtn').on('click', function(){
		jQuery('#back-top-wrapper a').click();
	})

	_window.on("resize", function(){
		resizeFunction();
	})
	resizeFunction();

	function resizeFunction(){
		var
			newWidth = _window.width()
		,	marginHalf = _window.width()/-2;
		;
		jQuery('.home .google-map-api').css({width: newWidth, "margin-left": marginHalf, left: '50%'});
	}
});

jQuery(function() {
 var
  menuWrap = jQuery('.header .nav__primary')
 , offsetArray = []
 , offsetValueArray = []
 , _document = jQuery(document)
 , currHash = ''
 , isAnim = false
 , isHomePage = jQuery('body').hasClass('home')? true:false
 ;
 
 //--------------------------- Menu navigation ---------------------------
 jQuery('#topnav > li', menuWrap).each(function(){
  if(jQuery(this).hasClass('menu-item-type-custom')){
   var newUrl = jQuery('header .logo a').attr('href');
   newUrl += jQuery('>a', this).attr('href');
   if(!isHomePage){
    jQuery('>a', this).attr({'href':newUrl});
   }
  }
 })
 jQuery('.select-menu > option', menuWrap).each(function(){
  var optionVal = jQuery(this).attr('value');
  if(optionVal.indexOf('#')!=-1){
   var newVal = optionVal.substring(optionVal.indexOf('#'), optionVal.length);
   var newUrl = jQuery('header .logo_h').attr('href');
   newUrl += newVal;
   if(!isHomePage){
    jQuery(this).attr('value', newUrl);
   }
  }
 })

 getPageOffset();
 function getPageOffset(){
  offsetArray = [];
  offsetValueArray = [];
  jQuery('.hashAncor').each(function(){
   var _item = new Object();
   _item.hashVal = "#"+jQuery(this).attr('id');
   _item.offsetVal = jQuery(this).offset().top;
   offsetArray.push(_item);
   offsetValueArray.push(_item.offsetVal);
  })
 }

 function offsetListener(scrollTopValue, anim){
  if(isHomePage){
   scrolledValue = scrollTopValue;
   var nearIndex = 0;

   nearIndex = findNearIndex(offsetValueArray, scrolledValue)
   currHash = offsetArray[nearIndex].hashVal;

   if(window.location.hash != currHash){
    if(anim){
     isAnim = true;
     jQuery('html, body').stop().animate({'scrollTop':scrolledValue}, 900, function(){
      isAnim = false;
      window.location.hash = currHash;
      jQuery('html, body').stop().animate({'scrollTop':scrolledValue},0);
      return false;
     });
    }else{
     window.location.hash = currHash;
     jQuery('html, body').stop().animate({'scrollTop':scrolledValue},0);
     return false;
    }
   }
  }
 }

 function findNearIndex(array, targetNumber){
  var
   currDelta
  , nearDelta
  , nearIndex = -1
  , i = array.length
  ;

  while (i--){
   currDelta = Math.abs( targetNumber - array[i] );
   if( nearIndex < 0 || currDelta < nearDelta )
    {
     nearIndex = i;
     nearDelta = currDelta;
    }
  }
  return nearIndex;
 }
 jQuery(window).on('mousedown',function(){
  isAnim = true;
 })
 jQuery(window).on('mouseup',function(){
  isAnim = false;
  offsetListener(_document.scrollTop(), false);
 })

 jQuery(window).on('mousewheel',function(event, delta){
  offsetListener(_document.scrollTop(), false);
 })
 jQuery(window).on('resize', function(){
  getPageOffset();
 })
 jQuery('#topnav > li a[href^="#"]').on('click',function (e) {
  e.preventDefault();

  var target = this.hash,
  jQuerytarget = jQuery(target);

  if (jQuerytarget.length != 0) {
  	offsetListener(jQuerytarget.offset().top, true);
  }

  return false;
 });
 
 jQuery(window).on('hashchange', function() {

  var target = window.location.hash ? window.location.hash : offsetArray[0].hashVal;
	  jQuery('.active-menu-item').removeClass('active-menu-item');
	  jQuery('#topnav > li a[href="' + target + '"]', menuWrap).parent().addClass('active-menu-item');
  }).trigger('hashchange');

});

function RandomOfRange(min, max, isRound) {
  var res;
  if (isRound) {
    res = Math.round(Math.random()*(max-min)+min);
  }else{
    res = Math.random()*(max-min)+min;
  }
  return res;
}