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

$("#menu-item-58").click(function() {
    $('html,body').animate({
        scrollTop: $("#menu-container").offset().top},
        'slow');
});

$("#menu-item-60").click(function() {
    $('html,body').animate({
        scrollTop: $("#delivery-container").offset().top},
        'slow');
});
