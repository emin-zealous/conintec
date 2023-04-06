(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Arrows position in Nearshore Services sections
    function imageDementions() {
      const img = $(
        "#nearshore-images > div > div > div > div > div > div > div.owl-item.active > div > div.photobox-img > img"
      );
      const arrowLength = $(
        "#nearshore-images > div > div > div > div > div.owl-wrapper-outer"
      );
      // Set the top and width properties of your target div to the image height
      $(".owl-nav").css({
        top: img.height() / 2 - 35 + "px",
        "max-width": arrowLength.width() - 12,
      });
    }
    imageDementions();
    $(window).resize(function () {
      setTimeout(() => {
        imageDementions();
      }, 1000); // set timer to wait 1s after resize event has finished
    });
  });
})(jQuery);
