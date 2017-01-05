//alert('hello world');

jQuery(function($){

  // ADD CLASS TO STICKY MENU ON SUBPAGES

  $("#mk-header-1.sticky-style-slide.full-header").addClass("wfc-subpage-menu");

  // ADD CLASS TO CURRENT PAGE LIST ITEM

  $(".menu-item.current_page_item.menu-item-has-children").addClass("dropdownOpen");

  // CLONE THE SUBPAGE NAVIGATION
  /*
  $("header.wfc-subpage-menu .main-navigation-ul li.current_page_item.menu-item-has-children .sub-menu").clone().appendTo("#wfc-subpage-nav");
  */

  // CLONE THE TOP BAR INTO STICKY MENU

  $("#top-of-page").clone().appendTo(".wfc-sticky-top-bar");

// if($('.mk-button--text').html('LEARN MORE')){
//   var lmLink = $('.mk-button--text');
//   lmLink.html('Request a Quote').css('text-transform','uppercase');
//   lmLink.wrap("<a href='/cms-wfc-new/contact'><a/>");
// }
});
