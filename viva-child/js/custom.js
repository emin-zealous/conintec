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
  });
})(jQuery);
