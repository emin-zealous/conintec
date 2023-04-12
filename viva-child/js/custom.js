(function ($) {
  $(document).ready(function () {
    ("use strict");

    const images = {
      "first-image": "/wp-content/uploads/2023/04/foto_telescope_284-1-1.webp",
      "second-image": "/wp-content/uploads/2023/04/foto_puzzle_284-1-1.webp",
      "thirdth-image": "/wp-content/uploads/2023/04/computer_hand_288x284.webp",
      "fourth-image": "/wp-content/uploads/2023/04/Hands-1-1.webp",
    };

    for (const [className, src] of Object.entries(images)) {
      $(`.${className} > div > a > .timeline-item-date`).append(
        `<img width="25%" height="auto" style="max-width: 80px; margin: -10px" src="${src}">`
      );
    }
  });
})(jQuery);
