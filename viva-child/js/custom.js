(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Replace news section URLs
    $("a[href*='portfolio-news']").attr("href", function (i, val) {
      if ($("html").attr("lang") === "en-US") {
        return val.replace("/portfolio-news/", "/news/#").replace(/\/$/, "");
      } else if ($("html").attr("lang") === "de-DE") {
        return val
          .replace("/portfolio-news/", "/news-center/#")
          .replace(/\/$/, "");
      }
    });
  });
})(jQuery);
