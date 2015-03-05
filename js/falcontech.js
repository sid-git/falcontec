  jQuery(document).ready(function(){
  jQuery(window).bind('scroll', function() {
    var navHeight = 300; // custom nav height
    (jQuery(window).scrollTop() > navHeight) ? jQuery('.secondary-nav, .thirdary-nav ').addClass('sticky-header') : jQuery('.secondary-nav, .thirdary-nav').removeClass('sticky-header');
  });
});