

	$(function () {
  
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  
  if (!msie6 && $('.sidebar').offset()!=null) {
    var top = $('.sidebar').offset().top - parseFloat($('.sidebar').css('margin-top').replace(/auto/, 0));
	var height = $('.sidebar').height();
	var winHeight = $(window).height();	
	var footerTop = $('#footer').offset().top - parseFloat($('#footer').css('margin-top').replace(/auto/, 0));
	
	var gap = 100;
    $(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = $(this).scrollTop();


      console.log(y+winHeight >= top+ height+gap && y+winHeight<=footerTop)
      
      // whether that's below the form
      if (y+winHeight >= top+ height+gap && y+winHeight<=footerTop) {
        // if so, ad the fixed class
        $('.sidebar').addClass('fixed').css('top',winHeight-height-gap +'px');
      } 

	  else if (y+winHeight>footerTop) {
        // if so, ad the fixed class
       $('.sidebar').addClass('fixed').css('top',footerTop-height-y-gap+'px');
      } 
	  else 	  
	  {
        // otherwise remove it
        $('.sidebar').removeClass('fixed').css('top',0+'px');
      }
    });
  }  
});
