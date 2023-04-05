(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Make Polylang menu icon non clickable
    $(".pll-parent-menu-item > a").click(function () {
      return false;
    });

    /* Add Journey to Partnership section icons */    
    $('.fa-puzzle-piece').removeClass('fas fa-puzzle-piece').addClass('fa-light fa-puzzle');
    $('.fa-handshake').removeClass('far fa-handshake').addClass('fa-light fa-hands-holding-diamond'); 

  });
})(jQuery);
