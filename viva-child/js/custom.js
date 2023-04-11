(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Fix bugs related to Linkedin icon
    $(".fa-linkedin-square")
      .removeClass("fa-linkedin-square")
      .addClass("fa-linkedin-in");

    // Add tooltip to social media icons
    $(".fa-linkedin-in").attr("title", "Linkedin");
    $(".fa-xing").attr("title", "Xing");
    $(".fa-youtube").attr("title", "Youtube");

    // Make Journey to partnership section non clickable
    $(".make-non-clickable").click(function (event) {
      event.preventDefault();
    });

    // Make Polylang menu icon non clickable
    $(".pll-parent-menu-item > a").click(function () {
      return false;
    });
    
  });
})(jQuery);
