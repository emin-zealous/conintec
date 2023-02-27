(function ($) {
  $(document).ready(function () {
    ("use strict");

    // fix bugs related to Linkedin icon
    $(".fa-linkedin-square")
      .removeClass("fa-linkedin-square")
      .addClass("fa-linkedin-in");

    // Add tooltip to social media icons
    $(".fa-linkedin-in").attr("title", "Linkedin");
    $(".fa-xing").attr("title", "Xing");
    $(".fa-youtube").attr("title", "Youtube");
  });
})(jQuery);
