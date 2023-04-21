(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Define the language URLs
    const langUrls = {
      "en-US": {
        searchUrl: "/portfolio-news/",
        replaceUrl: "/news/#",
      },
      "de-DE": {
        searchUrl: "/portfolio-news/",
        replaceUrl: "/news-center/#",
      },
    };

    // Replace news section URLs
    $("a[href*='portfolio-news']").attr("href", function (i, val) {
      const lang = $("html").attr("lang");
      const langUrl = langUrls[lang];
      if (langUrl) {
        return val
          .replace(langUrl.searchUrl, langUrl.replaceUrl)
          .replace(/\/$/, "");
      }
    });
  });
})(jQuery);
