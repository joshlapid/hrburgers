// Halphen Functions
$(window).scroll(function() {
  if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/
  {
      $('.opaque-navbar').addClass('opaque');
  } else {
      $('.opaque-navbar').removeClass('opaque');
  }
});

$("#menu-item-59").click(function() {
    $('html,body').animate({
        scrollTop: $("#about-us-container").offset().top},
        'slow');
});

$(".contact-us-button-mobile").click(function() {
    $('html,body').animate({
        scrollTop: $("#contact-us").offset().top},
        'slow');
});
