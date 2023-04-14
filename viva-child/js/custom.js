(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Make images clickable
    $('.nearshore-services a').each(function() {
      var link = $(this).attr('href');
      $(this).parent().parent().find('img').wrap('<a href="' + link + '"></a>');
    });

  });
})(jQuery);
