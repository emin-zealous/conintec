(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Make Polylang menu icon non clickable
    $(".pll-parent-menu-item > a").click(function () {
      return false;
    });

  });
})(jQuery);
