(function ($) {
  $(document).ready(function () {
    "use strict";

    // Floating menu issue on screen resize
    jQuery(window).on("resize", function () {
      jQuery(".fm-list").each(function () {
        var tabs_nr = jQuery(this).children(".fm-item").length;
        var tabs_width = jQuery(this).width();
        jQuery(".fm-list .nav-indicator").css("width", tabs_width / tabs_nr);
      });
    });

    // Navigate to a page section with animation
    var target = location.hash;
    var navbar_height = 0;
    var adminbar_offset = 0;
    if ($("#wpadminbar").length > 0) {
      adminbar_offset = 32;
    }
    if ($(".navbar.navbar-default .menubar").length > 0) {
      navbar_height = $(".navbar.navbar-default .menubar").outerHeight();
    }
    function addAnimation(id) {
      if ($(id).offset()) {
        $("html, body").animate(
          {
            scrollTop: $(id).offset().top - (navbar_height + adminbar_offset),
          },
          1000,
          "easeInOutQuart"
        );
      }
    }

    if (location.hash) {
      setTimeout(() => {
        addAnimation(target);
      }, 250);
    }

    // Use animation when switching between sections on the same page using the main menu
    $(
      "#menu-conintec > li > a[href*=\\#], #menu-conintec > li > ul > li > a[href*=\\#], #menu-conintec > li > ul > li > ul > li > a[href*=\\#], #menu-conintec_de > li > a[href*=\\#], #menu-conintec_de > li > ul > li > a[href*=\\#], #menu-conintec_de > li > ul > li > ul > li > a[href*=\\#]"
    ).bind("click", function (e) {
      const pageHref = location.href.split("#")[0];
      const buttonLink = $(this).attr("href").split("#")[0];
      const buttonId = "#" + $(this).attr("href").split("#")[1];
      if (pageHref === buttonLink) {
        e.preventDefault();
        addAnimation(buttonId);
        return false;
      }
    });
  });
})(jQuery);
