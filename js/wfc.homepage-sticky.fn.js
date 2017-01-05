(function($) {

	// $ Works! You can test it with next line if you like
	//console.log('congrats');

  // STICKY NAV ON HOMEPAGE

  var stickyNavTop = $('.wfc-homepage-navigation').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) {
      $('.wfc-homepage-navigation').addClass('wfc-homepage-sticky');
    }  else {
      $('.wfc-homepage-navigation').removeClass('wfc-homepage-sticky');
    }
  };

  stickyNav();

  $(window).scroll(function(){
    stickyNav();
  });

})( jQuery );
