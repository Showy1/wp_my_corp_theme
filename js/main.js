jQuery(function () {
  // Scroll Top & FadeIn Scripts
  var top = jQuery('#top')
  top.hide();

  jQuery(window).scroll(function (){
    var scroll = jQuery(this).scrollTop();
    if(scroll > 100){
      top.fadeIn();
    }else{
      top.fadeOut();
    }
  });

  top.click(function(){
    jQuery('html, body').animate({scrollTop: 0}, 500);
  });

  // Contact form disabled
  jQuery('.button').prop('disabled', true);
  jQuery('.button').css('pointer-events', 'none');
});
